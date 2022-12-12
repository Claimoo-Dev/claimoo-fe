<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\HttpFoundation\Session\Storage\Handler;

use Predis\Response\ErrorInterface;
<<<<<<< HEAD
=======
<<<<<<< HEAD
use Symfony\Component\Cache\Traits\RedisClusterProxy;
use Symfony\Component\Cache\Traits\RedisProxy;
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0

/**
 * Redis based session storage handler based on the Redis class
 * provided by the PHP redis extension.
 *
 * @author Dalibor Karlović <dalibor@flexolabs.io>
 */
class RedisSessionHandler extends AbstractSessionHandler
{
<<<<<<< HEAD
=======
<<<<<<< HEAD
    private \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface|RedisProxy|RedisClusterProxy $redis;

=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    /**
     * Key prefix for shared environments.
     */
    private string $prefix;

    /**
     * Time to live in seconds.
     */
    private int|\Closure|null $ttl;

    /**
     * List of available options:
     *  * prefix: The prefix to use for the keys in order to avoid collision on the Redis server
     *  * ttl: The time to live in seconds.
     *
     * @throws \InvalidArgumentException When unsupported client or options are passed
     */
<<<<<<< HEAD
=======
<<<<<<< HEAD
    public function __construct(\Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface|RedisProxy|RedisClusterProxy $redis, array $options = [])
    {
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    public function __construct(
        private \Redis|\RedisArray|\RedisCluster|\Predis\ClientInterface $redis,
        array $options = [],
    ) {
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        if ($diff = array_diff(array_keys($options), ['prefix', 'ttl'])) {
            throw new \InvalidArgumentException(sprintf('The following options are not supported "%s".', implode(', ', $diff)));
        }

<<<<<<< HEAD
=======
<<<<<<< HEAD
        $this->redis = $redis;
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
        $this->prefix = $options['prefix'] ?? 'sf_s';
        $this->ttl = $options['ttl'] ?? null;
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
    protected function doRead(string $sessionId): string
    {
        return $this->redis->get($this->prefix.$sessionId) ?: '';
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
    protected function doWrite(string $sessionId, string $data): bool
    {
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');
        $result = $this->redis->setEx($this->prefix.$sessionId, (int) $ttl, $data);

        return $result && !$result instanceof ErrorInterface;
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
    protected function doDestroy(string $sessionId): bool
    {
        static $unlink = true;

        if ($unlink) {
            try {
                $unlink = false !== $this->redis->unlink($this->prefix.$sessionId);
            } catch (\Throwable) {
                $unlink = false;
            }
        }

        if (!$unlink) {
            $this->redis->del($this->prefix.$sessionId);
        }

        return true;
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
    #[\ReturnTypeWillChange]
    public function close(): bool
    {
        return true;
    }

    public function gc(int $maxlifetime): int|false
    {
        return 0;
    }

    public function updateTimestamp(string $sessionId, string $data): bool
    {
        $ttl = ($this->ttl instanceof \Closure ? ($this->ttl)() : $this->ttl) ?? \ini_get('session.gc_maxlifetime');

        return $this->redis->expire($this->prefix.$sessionId, (int) $ttl);
    }
}
