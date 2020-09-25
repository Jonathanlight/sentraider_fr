<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Hautelook\AliceBundle;

use Symfony\Component\HttpKernel\Bundle\BundleInterface;

interface FixtureLocatorInterface
{
    /**
     * Locales all the fixture files to load.
     *
     * @param BundleInterface[] $bundles
     *
     * @return string[] Fixtures files paths
     */
    public function locateFiles(array $bundles, string $environment): array;
}
