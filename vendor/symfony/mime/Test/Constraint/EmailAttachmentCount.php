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
use Symfony\Component\Mime\Message;
use Symfony\Component\Mime\RawMessage;

final class EmailAttachmentCount extends Constraint
{
    private int $expectedValue;
    private ?string $transport;

    public function __construct(int $expectedValue, string $transport = null)
    {
        $this->expectedValue = $expectedValue;
        $this->transport = $transport;
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
        return sprintf('has sent "%d" attachment(s)', $this->expectedValue);
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
        if (RawMessage::class === \get_class($message) || Message::class === \get_class($message)) {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     */
    protected function matches($message): bool
    {
        if (RawMessage::class === $message::class || Message::class === $message::class) {
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            throw new \LogicException('Unable to test a message attachment on a RawMessage or Message instance.');
        }

        return $this->expectedValue === \count($message->getAttachments());
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
