<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Uid\Factory;

<<<<<<< HEAD
use Symfony\Component\Uid\Uuid;
use Symfony\Component\Uid\UuidV1;
use Symfony\Component\Uid\UuidV6;
=======
use Symfony\Component\Uid\TimeBasedUidInterface;
use Symfony\Component\Uid\Uuid;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2

class TimeBasedUuidFactory
{
    private string $class;
    private ?Uuid $node;

    public function __construct(string $class, Uuid $node = null)
    {
        $this->class = $class;
        $this->node = $node;
    }

<<<<<<< HEAD
    public function create(\DateTimeInterface $time = null): UuidV6|UuidV1
=======
    public function create(\DateTimeInterface $time = null): Uuid&TimeBasedUidInterface
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    {
        $class = $this->class;

        if (null === $time && null === $this->node) {
            return new $class();
        }

        return new $class($class::generate($time, $this->node));
    }
}
