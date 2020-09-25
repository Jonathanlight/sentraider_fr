<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\HttpKernel;

use Hautelook\AliceBundle\NotCallableTrait;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\KernelInterface;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class DummyKernel implements KernelInterface
{
    use NotCallableTrait;

    /**
     * {@inheritdoc}
     */
    public function serialize()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function unserialize($serialized)
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function handle(Request $request, $type = self::MASTER_REQUEST, $catch = true)
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function registerBundles()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function registerContainerConfiguration(\Symfony\Component\Config\Loader\LoaderInterface $loader)
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function boot()
    {
        // Do nothing
    }

    /**
     * {@inheritdoc}
     */
    public function shutdown()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function getBundles()
    {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getBundle($name, $first = true)
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function locateResource($name, $dir = null, $first = true)
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'fake';
    }

    /**
     * {@inheritdoc}
     */
    public function getEnvironment()
    {
        return 'fake_env';
    }

    /**
     * {@inheritdoc}
     */
    public function isDebug()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getRootDir()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function getContainer()
    {
        return new Container();
    }

    /**
     * {@inheritdoc}
     */
    public function getStartTime()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function getCacheDir()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function getLogDir()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function getCharset()
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function isClassInActiveBundle($class)
    {
        $this->__call(__METHOD__, \func_get_args());
    }

    /**
     * {@inheritdoc}
     */
    public function getProjectDir()
    {
        $this->__call(__METHOD__, \func_get_args());
    }
}
