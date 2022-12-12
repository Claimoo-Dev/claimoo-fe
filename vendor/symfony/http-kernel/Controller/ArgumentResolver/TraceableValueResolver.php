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
use Symfony\Component\Stopwatch\Stopwatch;

/**
 * Provides timing information via the stopwatch.
 *
 * @author Iltar van der Berg <kjarli@gmail.com>
 */
<<<<<<< HEAD
=======
<<<<<<< HEAD
final class TraceableValueResolver implements ArgumentValueResolverInterface
{
    private ArgumentValueResolverInterface $inner;
    private Stopwatch $stopwatch;

    public function __construct(ArgumentValueResolverInterface $inner, Stopwatch $stopwatch)
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
final class TraceableValueResolver implements ArgumentValueResolverInterface, ValueResolverInterface
{
    private ArgumentValueResolverInterface|ValueResolverInterface $inner;
    private Stopwatch $stopwatch;

    public function __construct(ArgumentValueResolverInterface|ValueResolverInterface $inner, Stopwatch $stopwatch)
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    {
        $this->inner = $inner;
        $this->stopwatch = $stopwatch;
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * {@inheritdoc}
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @deprecated since Symfony 6.2, use resolve() instead
     */
    public function supports(Request $request, ArgumentMetadata $argument): bool
    {
        if ($this->inner instanceof ValueResolverInterface) {
            return true;
        }

<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $method = \get_class($this->inner).'::'.__FUNCTION__;
        $this->stopwatch->start($method, 'controller.argument_value_resolver');

        $return = $this->inner->supports($request, $argument);

        $this->stopwatch->stop($method);

        return $return;
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function resolve(Request $request, ArgumentMetadata $argument): iterable
    {
        $method = \get_class($this->inner).'::'.__FUNCTION__;
        $this->stopwatch->start($method, 'controller.argument_value_resolver');

        yield from $this->inner->resolve($request, $argument);

        $this->stopwatch->stop($method);
    }
}
