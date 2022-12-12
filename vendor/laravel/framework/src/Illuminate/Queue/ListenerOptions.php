<?php

namespace Illuminate\Queue;

class ListenerOptions extends WorkerOptions
{
    /**
     * The environment the worker should run in.
     *
     * @var string
     */
    public $environment;

    /**
     * Create a new listener options instance.
     *
     * @param  string  $name
     * @param  string|null  $environment
     * @param  int|int[]  $backoff
     * @param  int  $memory
     * @param  int  $timeout
     * @param  int  $sleep
     * @param  int  $maxTries
     * @param  bool  $force
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * @return void
     */
    public function __construct($name = 'default', $environment = null, $backoff = 0, $memory = 128, $timeout = 60, $sleep = 3, $maxTries = 1, $force = false)
    {
        $this->environment = $environment;

        parent::__construct($name, $backoff, $memory, $timeout, $sleep, $maxTries, $force);
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * @param  int  $rest
     * @return void
     */
    public function __construct($name = 'default', $environment = null, $backoff = 0, $memory = 128, $timeout = 60, $sleep = 3, $maxTries = 1, $force = false, $rest = 0)
    {
        $this->environment = $environment;

        parent::__construct($name, $backoff, $memory, $timeout, $sleep, $maxTries, $force, false, 0, 0, $rest);
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }
}
