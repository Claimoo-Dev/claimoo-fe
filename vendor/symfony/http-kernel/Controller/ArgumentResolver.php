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
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver;
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver;
<<<<<<< HEAD
=======
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
use Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactoryInterface;

/**
 * Responsible for resolving the arguments passed to an action.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
final class ArgumentResolver implements ArgumentResolverInterface
{
    private ArgumentMetadataFactoryInterface $argumentMetadataFactory;
    private iterable $argumentValueResolvers;

    /**
<<<<<<< HEAD
     * @param iterable<mixed, ArgumentValueResolverInterface> $argumentValueResolvers
=======
     * @param iterable<mixed, ArgumentValueResolverInterface|ValueResolverInterface> $argumentValueResolvers
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
     */
    public function __construct(ArgumentMetadataFactoryInterface $argumentMetadataFactory = null, iterable $argumentValueResolvers = [])
    {
        $this->argumentMetadataFactory = $argumentMetadataFactory ?? new ArgumentMetadataFactory();
        $this->argumentValueResolvers = $argumentValueResolvers ?: self::getDefaultArgumentValueResolvers();
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function getArguments(Request $request, callable $controller): array
    {
        $arguments = [];

        foreach ($this->argumentMetadataFactory->createArgumentMetadata($controller) as $metadata) {
            foreach ($this->argumentValueResolvers as $resolver) {
                if (!$resolver->supports($request, $metadata)) {
                    continue;
                }

                $resolved = $resolver->resolve($request, $metadata);

                $atLeastOne = false;
                foreach ($resolved as $append) {
                    $atLeastOne = true;
                    $arguments[] = $append;
                }

                if (!$atLeastOne) {
                    throw new \InvalidArgumentException(sprintf('"%s::resolve()" must yield at least one value.', get_debug_type($resolver)));
                }

                // continue to the next controller argument
                continue 2;
=======
    public function getArguments(Request $request, callable $controller, \ReflectionFunctionAbstract $reflector = null): array
    {
        $arguments = [];

        foreach ($this->argumentMetadataFactory->createArgumentMetadata($controller, $reflector) as $metadata) {
            foreach ($this->argumentValueResolvers as $resolver) {
                if ((!$resolver instanceof ValueResolverInterface || $resolver instanceof TraceableValueResolver) && !$resolver->supports($request, $metadata)) {
                    continue;
                }

                $count = 0;
                foreach ($resolver->resolve($request, $metadata) as $argument) {
                    ++$count;
                    $arguments[] = $argument;
                }

                if (1 < $count && !$metadata->isVariadic()) {
                    throw new \InvalidArgumentException(sprintf('"%s::resolve()" must yield at most one value for non-variadic arguments.', get_debug_type($resolver)));
                }

                if ($count) {
                    // continue to the next controller argument
                    continue 2;
                }

                if (!$resolver instanceof ValueResolverInterface) {
                    throw new \InvalidArgumentException(sprintf('"%s::resolve()" must yield at least one value.', get_debug_type($resolver)));
                }
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            }

            $representative = $controller;

            if (\is_array($representative)) {
                $representative = sprintf('%s::%s()', \get_class($representative[0]), $representative[1]);
            } elseif (\is_object($representative)) {
<<<<<<< HEAD
                $representative = \get_class($representative);
=======
                $representative = get_debug_type($representative);
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
            }

            throw new \RuntimeException(sprintf('Controller "%s" requires that you provide a value for the "$%s" argument. Either the argument is nullable and no null value has been provided, no default value has been provided or because there is a non optional argument after this one.', $representative, $metadata->getName()));
        }

        return $arguments;
    }

    /**
     * @return iterable<int, ArgumentValueResolverInterface>
     */
    public static function getDefaultArgumentValueResolvers(): iterable
    {
        return [
            new RequestAttributeValueResolver(),
            new RequestValueResolver(),
            new SessionValueResolver(),
            new DefaultValueResolver(),
            new VariadicValueResolver(),
        ];
    }
}
