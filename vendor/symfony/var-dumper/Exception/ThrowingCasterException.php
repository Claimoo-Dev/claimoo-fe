<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Exception;

/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class ThrowingCasterException extends \Exception
{
    /**
     * @param \Throwable $prev The exception thrown from the caster
     */
    public function __construct(\Throwable $prev)
    {
<<<<<<< HEAD
        parent::__construct('Unexpected '.$prev::class.' thrown from a caster: '.$prev->getMessage(), 0, $prev);
=======
<<<<<<< HEAD
        parent::__construct('Unexpected '.\get_class($prev).' thrown from a caster: '.$prev->getMessage(), 0, $prev);
=======
        parent::__construct('Unexpected '.$prev::class.' thrown from a caster: '.$prev->getMessage(), 0, $prev);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }
}
