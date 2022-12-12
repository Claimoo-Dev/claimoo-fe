<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\HttpFoundation\Response;

final class ResponseIsUnprocessable extends Constraint
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    /**
     * {@inheritdoc}
     */
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function toString(): string
    {
        return 'is unprocessable';
    }

    /**
     * @param Response $other
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function matches($other): bool
    {
        return Response::HTTP_UNPROCESSABLE_ENTITY === $other->getStatusCode();
    }

    /**
     * @param Response $other
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function failureDescription($other): string
    {
        return 'the Response '.$this->toString();
    }

    /**
     * @param Response $other
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function additionalFailureDescription($other): string
    {
        return (string) $other;
    }
}
