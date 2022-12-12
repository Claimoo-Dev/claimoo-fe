<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\ControllerMetadata;

/**
 * Builds method argument data.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
interface ArgumentMetadataFactoryInterface
{
    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @return ArgumentMetadata[]
     */
    public function createArgumentMetadata(string|object|array $controller): array;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @param \ReflectionFunctionAbstract|null $reflector
     *
     * @return ArgumentMetadata[]
     */
    public function createArgumentMetadata(string|object|array $controller/* , \ReflectionFunctionAbstract $reflector = null */): array;
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
}
