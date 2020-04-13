<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\Transport\Smtp;

use Psr\Log\LoggerInterface;
use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\Exception\LogicException;
use Symfony\Component\Mailer\Exception\TransportException;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mailer\Transport\Smtp\Stream\AbstractStream;
use Symfony\Component\Mailer\Transport\Smtp\Stream\SocketStream;
use Symfony\Component\Mime\RawMessage;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

/**
 * Sends emails over SMTP.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Chris Corbyn
 */
class SmtpTransport extends AbstractTransport
{
    private $started = false;
    private $restartThreshold = 100;
    private $restartThresholdSleep = 0;
    private $restartCounter;
    private $pingThreshold = 100;
    private $lastMessageTime = 0;
    private $stream;
    private $domain = '[127.0.0.1]';

    public function __construct(AbstractStream $stream = null, EventDispatcherInterface $dispatcher = null, LoggerInterface $logger = null)
    {
        parent::__construct($dispatcher, $logger);

        $this->stream = $stream ?: new SocketStream();
    }

    public function getStream(): AbstractStream
    {
        return $this->stream;
    }

    /**
     * Sets the maximum number of messages to send before re-starting the transport.
     *
     * By default, the threshold is set to 100 (and no sleep at restart).
     *
     * @param int $threshold The maximum number of messages (0 to disable)
     * @param int $sleep     The number of seconds to sleep between stopping and re-starting the transport
     */
    public function setRestartThreshold(int $threshold, int $sleep = 0): self
    {
        $this->restartThreshold = $threshold;
        $this->restartThresholdSleep = $sleep;

        return $this;
    }

    /**
     * Sets the minimum number of seconds required between two messages, before the server is pinged.
     * If the transport wants to send a message and the time since the last message exceeds the specified threshold,
     * the transport will ping the server first (NOOP command) to check if the connection is still alive.
     * Otherwise the message will be sent without pinging the server first.
     *
     * Do not set the threshold too low, as the SMTP server may drop the connection if there are too many
     * non-mail commands (like pinging the server with NOOP).
     *
     * By default, the threshold is set to 100 seconds.
     *
     * @param int $seconds The minimum number of seconds between two messages required to ping the server
     *
     * @return $this
     */
    public function setPingThreshold(int $seconds): self
    {
        $this->pingThreshold = $seconds;

        return $this;
    }

    /**
     * Sets the name of the local domain that will be used in HELO.
     *
     * This should be a fully-qualified domain name and should be truly the domain
     * you're using.
     *
     * If your server does not have a domain name, use the IP address. This will
     * automatically be wrapped in square brackets as described in RFC 5321,
     * section 4.1.3.
     */
    public function setLocalDomain(string $domain): self
    {
        if ('' !== $domain && '[' !== $domain[0]) {
            if (filter_var($domain, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
                $domain = '['.$domain.']';
            } elseif (filter_var($domain, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
                $domain = '[IPv6:'.$domain.']';
            }
        }

        $this->domain = $domain;

        return $this;
    }

    /**
     * Gets the name of the domain that will be used in HELO.
     *
     * If an IP address was specified, this will be returned wrapped in square
     * brackets as described in RFC 5321, section 4.1.3.
     */
    public function getLocalDomain(): string
    {
        return $this->domain;
    }

    public function send(RawMessage $message, Envelope $envelope = null): ?SentMessage
    {
        try {
            $message = parent::send($message, $envelope);
        } catch (TransportExceptionInterface $e) {
            if ($this->started) {
                try {
                    $this->executeCommand("RSET\r\n", [250]);
                } catch (TransportExceptionInterface $_) {
                    // ignore this exception as it probably means that the server error was final
                }
            }

            throw $e;
        }

        $this->checkRestartThreshold();

        return $message;
    }

    public function __toString(): string
    {
        if ($this->stream instanceof SocketStream) {
            $name = sprintf('smtp%s://%s', ($tls = $this->stream->isTLS()) ? 's' : '', $this->stream->getHost());
            $port = $this->stream->getPort();
            if (!(25 === $port || ($tls && 465 === $port))) {
                $name .= ':'.$port;
            }

            return $name;
        }

        return sprintf('smtp://sendmail');
    }

    /**
     * Runs a command against the stream, expecting the given response codes.
     *
     * @param int[] $codes
     *
     * @return string The server response
     *
     * @throws TransportException when an invalid response if received
     *
     * @internal
     */
    public function executeCommand(string $command, array $codes): string
    {
        $this->stream->write($command);
        $response = $this->getFullResponse();
        $this->assertResponseCode($response, $codes);

        return $response;
    }

    protected function doSend(SentMessage $message): void
    {
        if (microtime(true) - $this->lastMessageTime > $this->pingThreshold) {
            $this->ping();
        }

        if (!$this->started) {
            $this->start();
        }

        try {
            $envelope = $message->getEnvelope();
            $this->doMailFromCommand($envelope->getSender()->getAddress());
            foreach ($envelope->getRecipients() as $recipient) {
                $this->doRcptToCommand($recipient->getAddress());
            }

            $this->executeCommand("DATA\r\n", [354]);
            foreach (AbstractStream::replace("\r\n.", "\r\n..", $message->toIterable()) as $chunk) {
                $this->stream->write($chunk, false);
            }
            $this->stream->flush();
            $this->executeCommand("\r\n.\r\n", [250]);
            $message->appendDebug($this->stream->getDebug());
        } catch (TransportExceptionInterface $e) {
            $e->appendDebug($this->stream->getDebug());

            throw $e;
        } finally {
            $this->lastMessageTime = microtime(true);
        }
    }

    protected function doHeloCommand(): void
    {
        $this->executeCommand(sprintf("HELO %s\r\n", $this->domain), [250]);
    }

    private function doMailFromCommand(string $address): void
    {
        $this->executeCommand(sprintf("MAIL FROM:<%s>\r\n", $address), [250]);
    }

    private function doRcptToCommand(string $address): void
    {
        $this->executeCommand(sprintf("RCPT TO:<%s>\r\n", $address), [250, 251, 252]);
    }

    private function start(): void
    {
        if ($this->started) {
            return;
        }

        $this->getLogger()->debug(sprintf('Email transport "%s" starting', __CLASS__));

        $this->stream->initialize();
        $this->assertResponseCode($this->getFullResponse(), [220]);
        $this->doHeloCommand();
        $this->started = true;
        $this->lastMessageTime = 0;

        $this->getLogger()->debug(sprintf('Email transport "%s" started', __CLASS__));
    }

    private function stop(): void
    {
        if (!$this->started) {
            return;
        }

        $this->getLogger()->debug(sprintf('Email transport "%s" stopping', __CLASS__));

        try {
            $this->executeCommand("QUIT\r\n", [221]);
        } catch (TransportExceptionInterface $e) {
        } finally {
            $this->stream->terminate();
            $this->started = false;
            $this->getLogger()->debug(sprintf('Email transport "%s" stopped', __CLASS__));
        }
    }

    private function ping(): void
    {
        if (!$this->started) {
            return;
        }

        try {
            $this->executeCommand("NOOP\r\n", [250]);
        } catch (TransportExceptionInterface $e) {
            $this->stop();
        }
    }

    /**
     * @throws TransportException if a response code is incorrect
     */
    private function assertResponseCode(string $response, array $codes): void
    {
        if (!$codes) {
            throw new LogicException('You must set the expected response code.');
        }

        if (!$response) {
            throw new TransportException(sprintf('Expected response code "%s" but got an empty response.', implode('/', $codes)));
        }

        list($code) = sscanf($response, '%3d');
        $valid = \in_array($code, $codes);

        if (!$valid) {
            throw new TransportException(sprintf('Expected response code "%s" but got code "%s", with message "%s".', implode('/', $codes), $code, trim($response)), $code);
        }
    }

    private function getFullResponse(): string
    {
        $response = '';
        do {
            $line = $this->stream->readLine();
            $response .= $line;
        } while ($line && isset($line[3]) && ' ' !== $line[3]);

        return $response;
    }

    private function checkRestartThreshold(): void
    {
        // when using sendmail via non-interactive mode, the transport is never "started"
        if (!$this->started) {
            return;
        }

        ++$this->restartCounter;
        if ($this->restartCounter < $this->restartThreshold) {
            return;
        }

        $this->stop();
        if (0 < $sleep = $this->restartThresholdSleep) {
            $this->getLogger()->debug(sprintf('Email transport "%s" sleeps for %d seconds after stopping', __CLASS__, $sleep));

            sleep($sleep);
        }
        $this->start();
        $this->restartCounter = 0;
    }

    public function __destruct()
    {
        $this->stop();
    }
}