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
use Nelmio\Alice\IsAServiceTrait;
use Symfony\Bundle\FrameworkBundle\Console\Application;

/**
 * Decorates another resolver to return all bundles if no bundle requested.
 */
final class NoBundleResolver implements BundleResolverInterface
{
    use IsAServiceTrait;

    private $decoratedResolver;

    public function __construct(BundleResolverInterface $decoratedResolver)
    {
        $this->decoratedResolver = $decoratedResolver;
    }

    /**
     * {@inheritdoc}
     */
    public function resolveBundles(Application $application, array $names)
    {
        if ([] === $names) {
            return array_values($application->getKernel()->getBundles());
        }

        return $this->decoratedResolver->resolveBundles($application, $names);
    }
}
