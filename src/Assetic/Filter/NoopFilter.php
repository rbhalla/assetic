<?php

namespace Assetic\Filter;

use Assetic\Asset\AssetInterface;

/*
 * This file is part of the Assetic package.
 *
 * (c) Kris Wallsmith <kris.wallsmith@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * The noop filter doesn't do anything.
 *
 * @author Kris Wallsmith <kris.wallsmith@gmail.com>
 */
class NoopFilter implements FilterInterface
{
    public function filterLoad(AssetInterface $asset)
    {
    }

    public function filterDump(AssetInterface $asset)
    {
    }
}
