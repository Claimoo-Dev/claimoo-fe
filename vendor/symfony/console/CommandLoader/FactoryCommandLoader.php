<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Console\CommandLoader;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Exception\CommandNotFoundException;

/**
 * A simple command loader using factories to instantiate commands lazily.
 *
 * @author Maxime Steinhausser <maxime.steinhausser@gmail.com>
 */
class FactoryCommandLoader implements CommandLoaderInterface
{
    private array $factories;

    /**
     * @param callable[] $factories Indexed by command names
     */
    public function __construct(array $factories)
    {
        $this->factories = $factories;
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    public function has(string $name): bool
    {
        return isset($this->factories[$name]);
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    public function get(string $name): Command
    {
        if (!isset($this->factories[$name])) {
            throw new CommandNotFoundException(sprintf('Command "%s" does not exist.', $name));
        }

        $factory = $this->factories[$name];

        return $factory();
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    public function getNames(): array
    {
        return array_keys($this->factories);
    }
}
