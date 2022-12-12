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
use Symfony\Component\HttpKernel\Attribute\MapDateTime;
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

/**
 * Convert DateTime instances from request attribute variable.
 *
 * @author Benjamin Eberlei <kontakt@beberlei.de>
 * @author Tim Goudriaan <tim@codedmonkey.com>
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
final class DateTimeValueResolver implements ArgumentValueResolverInterface
{
    /**
     * {@inheritdoc}
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        return is_a($argument->getType(), \DateTimeInterface::class, true) && $request->attributes->has($argument->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $value = $request->attributes->get($argument->getName());

        if ($value instanceof \DateTimeInterface) {
            yield $value;

            return;
        }

        if ($argument->isNullable() && !$value) {
            yield null;

            return;
        }

        $class = \DateTimeInterface::class === $argument->getType() ? \DateTimeImmutable::class : $argument->getType();
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
final class DateTimeValueResolver implements ArgumentValueResolverInterface, ValueResolverInterface
{
    /**
     * @deprecated since Symfony 6.2, use resolve() instead
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        @trigger_deprecation('symfony/http-kernel', '6.2', 'The "%s()" method is deprecated, use "resolve()" instead.', __METHOD__);

        return is_a($argument->getType(), \DateTimeInterface::class, true) && $request->attributes->has($argument->getName());
    }

    public function resolve(Request $request, ArgumentMetadata $argument): array
    {
        if (!is_a($argument->getType(), \DateTimeInterface::class, true) || !$request->attributes->has($argument->getName())) {
            return [];
        }

        $value = $request->attributes->get($argument->getName());
        $class = \DateTimeInterface::class === $argument->getType() ? \DateTimeImmutable::class : $argument->getType();

        if ($value instanceof \DateTimeInterface) {
            return [$value instanceof $class ? $value : $class::createFromInterface($value)];
        }

        if ($argument->isNullable() && !$value) {
            return [null];
        }

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $format = null;

        if ($attributes = $argument->getAttributes(MapDateTime::class, ArgumentMetadata::IS_INSTANCEOF)) {
            $attribute = $attributes[0];
            $format = $attribute->format;
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        $date = false;

=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if (null !== $format) {
            $date = $class::createFromFormat($format, $value);

            if (($class::getLastErrors() ?: ['warning_count' => 0])['warning_count']) {
                $date = false;
            }
        } else {
            if (false !== filter_var($value, \FILTER_VALIDATE_INT, ['options' => ['min_range' => 0]])) {
                $value = '@'.$value;
            }
            try {
<<<<<<< HEAD
                $date = new $class($value ?? 'now');
=======
<<<<<<< HEAD
                $date = new $class($value);
=======
                $date = new $class($value ?? 'now');
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            } catch (\Exception) {
                $date = false;
            }
        }

        if (!$date) {
            throw new NotFoundHttpException(sprintf('Invalid date given for parameter "%s".', $argument->getName()));
        }

<<<<<<< HEAD
        return [$date];
=======
<<<<<<< HEAD
        yield $date;
=======
        return [$date];
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }
}
