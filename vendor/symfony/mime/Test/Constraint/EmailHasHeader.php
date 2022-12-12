<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mime\Test\Constraint;

use PHPUnit\Framework\Constraint\Constraint;
use Symfony\Component\Mime\RawMessage;

final class EmailHasHeader extends Constraint
{
    private string $headerName;

    public function __construct(string $headerName)
    {
        $this->headerName = $headerName;
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
    public function toString(): string
    {
        return sprintf('has header "%s"', $this->headerName);
    }

    /**
     * @param RawMessage $message
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
     */
    protected function matches($message): bool
    {
        if (RawMessage::class === \get_class($message)) {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function matches($message): bool
    {
        if (RawMessage::class === $message::class) {
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            throw new \LogicException('Unable to test a message header on a RawMessage instance.');
        }

        return $message->getHeaders()->has($this->headerName);
    }

    /**
     * @param RawMessage $message
<<<<<<< HEAD
=======
<<<<<<< HEAD
     *
     * {@inheritdoc}
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function failureDescription($message): string
    {
        return 'the Email '.$this->toString();
    }
}
