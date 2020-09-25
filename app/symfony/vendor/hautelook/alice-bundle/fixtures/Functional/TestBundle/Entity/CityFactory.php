<?php

/*
 * This file is part of the Hautelook\AliceBundle package.
 *
 * (c) Baldur Rensch <brensch@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Hautelook\AliceBundle\Functional\TestBundle\Entity;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
class CityFactory
{
    public function create(string $name): City
    {
        $instance = new City();
        $instance->name = $name;

        return $instance;
    }
}
