<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\Completion;

/**
 * Represents a single suggested value.
 *
 * @author Wouter de Jong <wouter@wouterj.nl>
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
class Suggestion
{
    private string $value;

    public function __construct(string $value)
    {
        $this->value = $value;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
class Suggestion implements \Stringable
{
    public function __construct(
        private readonly string $value,
        private readonly string $description = ''
    ) {
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }

    public function getValue(): string
    {
        return $this->value;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function getDescription(): string
    {
        return $this->description;
    }

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function __toString(): string
    {
        return $this->getValue();
    }
}
