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
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Uid\AbstractUid;

<<<<<<< HEAD
=======
<<<<<<< HEAD
final class UidValueResolver implements ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
final class UidValueResolver implements ArgumentValueResolverInterface, ValueResolverInterface
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
        return !$argument->isVariadic()
            && \is_string($request->attributes->get($argument->getName()))
            && null !== $argument->getType()
            && is_subclass_of($argument->getType(), AbstractUid::class, true);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        /** @var class-string<AbstractUid> $uidClass */
        $uidClass = $argument->getType();

        try {
            return [$uidClass::fromString($request->attributes->get($argument->getName()))];
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function resolve(Request $request, ArgumentMetadata $argument): array
    {
        if ($argument->isVariadic()
            || !\is_string($value = $request->attributes->get($argument->getName()))
            || null === ($uidClass = $argument->getType())
            || !is_subclass_of($argument->getType(), AbstractUid::class, true)
        ) {
            return [];
        }

        /* @var class-string<AbstractUid> $uidClass */
        try {
            return [$uidClass::fromString($value)];
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        } catch (\InvalidArgumentException $e) {
            throw new NotFoundHttpException(sprintf('The uid for the "%s" parameter is invalid.', $argument->getName()), $e);
        }
    }
}
