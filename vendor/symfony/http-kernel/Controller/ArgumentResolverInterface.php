<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Controller;

use Symfony\Component\HttpFoundation\Request;

/**
 * An ArgumentResolverInterface instance knows how to determine the
 * arguments for a specific action.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface ArgumentResolverInterface
{
    /**
     * Returns the arguments to pass to the controller.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @throws \RuntimeException When no value could be provided for a required argument
     */
    public function getArguments(Request $request, callable $controller): array;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @param \ReflectionFunctionAbstract|null $reflector
     *
     * @throws \RuntimeException When no value could be provided for a required argument
     */
    public function getArguments(Request $request, callable $controller/* , \ReflectionFunctionAbstract $reflector = null */): array;
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
}
