<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\Logger;

use Hautelook\AliceBundle\NotCallableTrait;
use Psr\Log\LoggerInterface;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class FakeLogger implements LoggerInterface
{
    use NotCallableTrait;

    /**
     * {@inheritdoc}
     */
    public function emergency($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function alert($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function critical($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function error($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function warning($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function notice($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function info($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function debug($message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function log($level, $message, array $context = [])
    {
        $this->__call(__METHOD__, \func_get_args());
    }
}
