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

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
trait NotCallableTrait
{
    public function __call($method, $arguments)
    {
        throw new \DomainException(
            sprintf(
                'Did not expect "%s" to be called.',
                $method
            )
        );
    }
}
