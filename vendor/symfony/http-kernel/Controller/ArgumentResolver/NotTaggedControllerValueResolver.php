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

use Psr\Container\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ArgumentValueResolverInterface;
<<<<<<< HEAD
=======
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

/**
 * Provides an intuitive error message when controller fails because it is not registered as a service.
 *
 * @author Simeon Kolev <simeon.kolev9@gmail.com>
 */
<<<<<<< HEAD
final class NotTaggedControllerValueResolver implements ArgumentValueResolverInterface
=======
final class NotTaggedControllerValueResolver implements ArgumentValueResolverInterface, ValueResolverInterface
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
<<<<<<< HEAD
     * {@inheritdoc}
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
=======
     * @deprecated since Symfony 6.2, use resolve() instead
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        @trigger_deprecation('symfony/http-kernel', '6.2', 'The "%s()" method is deprecated, use "resolve()" instead.', __METHOD__);

>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        $controller = $request->attributes->get('_controller');

        if (\is_array($controller) && \is_callable($controller, true) && \is_string($controller[0])) {
            $controller = $controller[0].'::'.$controller[1];
        } elseif (!\is_string($controller) || '' === $controller) {
            return false;
        }

        if ('\\' === $controller[0]) {
            $controller = ltrim($controller, '\\');
        }

        if (!$this->container->has($controller) && false !== $i = strrpos($controller, ':')) {
            $controller = substr($controller, 0, $i).strtolower(substr($controller, $i));
        }

        return false === $this->container->has($controller);
    }

<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        if (\is_array($controller = $request->attributes->get('_controller'))) {
            $controller = $controller[0].'::'.$controller[1];
=======
    public function resolve(Request $request, ArgumentMetadata $argument): array
    {
        $controller = $request->attributes->get('_controller');

        if (\is_array($controller) && \is_callable($controller, true) && \is_string($controller[0])) {
            $controller = $controller[0].'::'.$controller[1];
        } elseif (!\is_string($controller) || '' === $controller) {
            return [];
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        }

        if ('\\' === $controller[0]) {
            $controller = ltrim($controller, '\\');
        }

        if (!$this->container->has($controller)) {
<<<<<<< HEAD
            $i = strrpos($controller, ':');
            $controller = substr($controller, 0, $i).strtolower(substr($controller, $i));
=======
            $controller = (false !== $i = strrpos($controller, ':'))
                ? substr($controller, 0, $i).strtolower(substr($controller, $i))
                : $controller.'::__invoke';
        }

        if ($this->container->has($controller)) {
            return [];
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
        }

        $what = sprintf('argument $%s of "%s()"', $argument->getName(), $controller);
        $message = sprintf('Could not resolve %s, maybe you forgot to register the controller as a service or missed tagging it with the "controller.service_arguments"?', $what);

        throw new RuntimeException($message);
    }
}
