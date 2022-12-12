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
use Symfony\Component\HttpFoundation\Session\SessionInterface;
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
 * Yields the Session.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
final class SessionValueResolver implements ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
final class SessionValueResolver implements ArgumentValueResolverInterface, ValueResolverInterface
{
    /**
     * @deprecated since Symfony 6.2, use resolve() instead
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        @trigger_deprecation('symfony/http-kernel', '6.2', 'The "%s()" method is deprecated, use "resolve()" instead.', __METHOD__);

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if (!$request->hasSession()) {
            return false;
        }

        $type = $argument->getType();
        if (SessionInterface::class !== $type && !is_subclass_of($type, SessionInterface::class)) {
            return false;
        }

        return $request->getSession() instanceof $type;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        yield $request->getSession();
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function resolve(Request $request, ArgumentMetadata $argument): array
    {
        if (!$request->hasSession()) {
            return [];
        }

        $type = $argument->getType();
        if (SessionInterface::class !== $type && !is_subclass_of($type, SessionInterface::class)) {
            return [];
        }

        return $request->getSession() instanceof $type ? [$request->getSession()] : [];
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }
}
