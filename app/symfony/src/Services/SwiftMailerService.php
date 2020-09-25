<?php

namespace App\Services;

use Twig\Environment;

class SwiftMailerService
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $twig;

    /**
     * MailerService constructor.
     *
     * @param \Swift_Mailer       $mailer
     * @param Environment   $twig
     */
    public function __construct(\Swift_Mailer $mailer, Environment $twig)
    {
        $this->mailer = $mailer;
        $this->twig = $twig;
    }

    /**
     * @param string $subject
     * @param array $mailFrom
     * @param array $mailTo
     * @param string $template
     * @param array $parameters
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     */
    public function send(string $subject, array $mailFrom, array $mailTo, string $template, array $parameters): void
    {

        $to = $mailTo ?? [];
        $from = $mailFrom ?? [];

        $message = (new \Swift_Message())
            ->setSubject($subject)
            ->setFrom($from)
            ->setTo($to)
            ->setBody($this->twig->render($template, $parameters), 'text/html');

        $this->mailer->send($message);
    }

}