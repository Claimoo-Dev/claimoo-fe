<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Mailer\DataCollector;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\DataCollector\DataCollector;
use Symfony\Component\Mailer\Event\MessageEvents;
use Symfony\Component\Mailer\EventListener\MessageLoggerListener;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
final class MessageDataCollector extends DataCollector
{
    private MessageEvents $events;

    public function __construct(MessageLoggerListener $logger)
    {
        $this->events = $logger->getEvents();
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
    public function collect(Request $request, Response $response, \Throwable $exception = null)
    {
        $this->data['events'] = $this->events;
    }

    public function getEvents(): MessageEvents
    {
        return $this->data['events'];
    }

    /**
     * @internal
     */
    public function base64Encode(string $data): string
    {
        return base64_encode($data);
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
    public function reset()
    {
        $this->data = [];
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
    public function getName(): string
    {
        return 'mailer';
    }
}
