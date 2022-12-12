<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpKernel\Log;

use Symfony\Component\HttpFoundation\Request;

/**
 * DebugLoggerInterface.
 *
 * @author Fabien Potencier <fabien@symfony.com>
 */
interface DebugLoggerInterface
{
    /**
     * Returns an array of logs.
     *
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * A log is an array with the following mandatory keys:
     * timestamp, message, priority, and priorityName.
     * It can also have an optional context key containing an array.
     *
     * @return array
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @return array<array{
     *     channel: ?string,
     *     context: array<string, mixed>,
     *     message: string,
     *     priority: int,
     *     priorityName: string,
     *     timestamp: int,
     *     timestamp_rfc3339: string,
     * }>
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    public function getLogs(Request $request = null);

    /**
     * Returns the number of errors.
     *
     * @return int
     */
    public function countErrors(Request $request = null);

    /**
     * Removes all log records.
     */
    public function clear();
}
