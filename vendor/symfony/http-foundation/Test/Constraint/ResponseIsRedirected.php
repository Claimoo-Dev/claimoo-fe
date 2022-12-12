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

final class ResponseIsRedirected extends Constraint
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
        return 'is redirected';
    }

    /**
     * @param Response $response
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function matches($response): bool
    {
        return $response->isRedirect();
    }

    /**
     * @param Response $response
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function failureDescription($response): string
    {
        return 'the Response '.$this->toString();
    }

    /**
     * @param Response $response
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function additionalFailureDescription($response): string
    {
        return (string) $response;
    }
}
