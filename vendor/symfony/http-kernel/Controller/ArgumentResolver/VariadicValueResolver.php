<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Controller\ArgumentResolver;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
<<<<<<< HEAD
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
=======
<<<<<<< HEAD
=======
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

/**
 * Yields a variadic argument's values from the request attributes.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
final class VariadicValueResolver implements ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return $argument->isVariadic() && $request->attributes->has($argument->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
final class VariadicValueResolver implements ArgumentValueResolverInterface, ValueResolverInterface
{
    /**
     * @deprecated since Symfony 6.2, use resolve() instead
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        @trigger_deprecation('symfony/http-kernel', '6.2', 'The "%s()" method is deprecated, use "resolve()" instead.', __METHOD__);

        return $argument->isVariadic() && $request->attributes->has($argument->getName());
    }

    public function resolve(Request $request, ArgumentMetadata $argument): array
    {
        if (!$argument->isVariadic() || !$request->attributes->has($argument->getName())) {
            return [];
        }

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $values = $request->attributes->get($argument->getName());

        if (!\is_array($values)) {
            throw new \InvalidArgumentException(sprintf('The action argument "...$%1$s" is required to be an array, the request attribute "%1$s" contains a type of "%2$s" instead.', $argument->getName(), get_debug_type($values)));
        }

<<<<<<< HEAD
        return $values;
=======
<<<<<<< HEAD
        yield from $values;
=======
        return $values;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }
}
