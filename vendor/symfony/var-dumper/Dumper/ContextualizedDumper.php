<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Dumper;

use Symfony\Component\VarDumper\Cloner\Data;
use Symfony\Component\VarDumper\Dumper\ContextProvider\ContextProviderInterface;

/**
 * @author Kévin Thérage <therage.kevin@gmail.com>
 */
class ContextualizedDumper implements DataDumperInterface
{
    private DataDumperInterface $wrappedDumper;
    private array $contextProviders;

    /**
     * @param ContextProviderInterface[] $contextProviders
     */
    public function __construct(DataDumperInterface $wrappedDumper, array $contextProviders)
    {
        $this->wrappedDumper = $wrappedDumper;
        $this->contextProviders = $contextProviders;
    }

    public function dump(Data $data)
    {
        $context = [];
        foreach ($this->contextProviders as $contextProvider) {
<<<<<<< HEAD
            $context[$contextProvider::class] = $contextProvider->getContext();
=======
<<<<<<< HEAD
            $context[\get_class($contextProvider)] = $contextProvider->getContext();
=======
            $context[$contextProvider::class] = $contextProvider->getContext();
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        }

        $this->wrappedDumper->dump($data->withContext($context));
    }
}
