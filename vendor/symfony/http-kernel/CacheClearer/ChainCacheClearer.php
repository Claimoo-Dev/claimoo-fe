<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\CacheClearer;

/**
 * ChainCacheClearer.
 *
 * @author Dustin Dobervich <ddobervich@gmail.com>
 *
 * @final
 */
class ChainCacheClearer implements CacheClearerInterface
{
    private iterable $clearers;

    /**
     * @param iterable<mixed, CacheClearerInterface> $clearers
     */
    public function __construct(iterable $clearers = [])
    {
        $this->clearers = $clearers;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function clear(string $cacheDir)
    {
        foreach ($this->clearers as $clearer) {
            $clearer->clear($cacheDir);
        }
    }
}
