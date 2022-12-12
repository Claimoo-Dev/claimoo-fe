<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Exception;

/**
<<<<<<< HEAD
 * Raised when a session does not exist. This happens in the following cases:
=======
<<<<<<< HEAD
 * Raised when a session does not exists. This happens in the following cases:
=======
 * Raised when a session does not exist. This happens in the following cases:
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
 * - the session is not enabled
 * - attempt to read a session outside a request context (ie. cli script).
 *
 * @author Jérémy Derussé <jeremy@derusse.com>
 */
class SessionNotFoundException extends \LogicException implements RequestExceptionInterface
{
    public function __construct(string $message = 'There is currently no session available.', int $code = 0, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
