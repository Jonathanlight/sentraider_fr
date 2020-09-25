<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle\Resolver\Bundle;

use Hautelook\AliceBundle\BundleResolverInterface;
use Hautelook\AliceBundle\Exception\Resolver\BundleNotFoundException;
use Nelmio\Alice\IsAServiceTrait;
use Symfony\Bundle\FrameworkBundle\Console\Application;

final class SimpleBundleResolver implements BundleResolverInterface
{
    use IsAServiceTrait;

    /**
     * {@inheritdoc}
     */
    public function resolveBundles(Application $application, array $names)
    {
        $bundles = $application->getKernel()->getBundles();

        $result = [];
        foreach ($names as $name) {
            if (false === isset($bundles[$name])) {
                throw BundleNotFoundException::create($name, $bundles);
            }

            $result[$name] = $bundles[$name];
        }

        return array_values($result);
    }
}
