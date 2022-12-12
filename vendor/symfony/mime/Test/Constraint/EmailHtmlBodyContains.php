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

final class EmailHtmlBodyContains extends Constraint
{
    private string $expectedText;

    public function __construct(string $expectedText)
    {
        $this->expectedText = $expectedText;
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
        return sprintf('contains "%s"', $this->expectedText);
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * {@inheritdoc}
     *
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @param RawMessage $message
     */
    protected function matches($message): bool
    {
<<<<<<< HEAD
        if (RawMessage::class === $message::class || Message::class === $message::class) {
=======
<<<<<<< HEAD
        if (RawMessage::class === \get_class($message) || Message::class === \get_class($message)) {
=======
        if (RawMessage::class === $message::class || Message::class === $message::class) {
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
            throw new \LogicException('Unable to test a message HTML body on a RawMessage or Message instance.');
        }

        return str_contains($message->getHtmlBody(), $this->expectedText);
    }

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * {@inheritdoc}
     *
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @param RawMessage $message
     */
    protected function failureDescription($message): string
    {
        return 'the Email HTML body '.$this->toString();
    }
}
