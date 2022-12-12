<?php

namespace Illuminate\Queue\Events;

class WorkerStopping
{
    /**
<<<<<<< HEAD
     * The worker exit status.
=======
<<<<<<< HEAD
     * The exit status.
=======
     * The worker exit status.
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     *
     * @var int
     */
    public $status;

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
     * Create a new event instance.
     *
     * @param  int  $status
     * @return void
     */
    public function __construct($status = 0)
    {
        $this->status = $status;
=======
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
     * The worker options.
     *
     * @var \Illuminate\Queue\WorkerOptions|null
     */
    public $workerOptions;

    /**
     * Create a new event instance.
     *
     * @param  int  $status
     * @param  \Illuminate\Queue\WorkerOptions|null  $workerOptions
     * @return void
     */
    public function __construct($status = 0, $workerOptions = null)
    {
        $this->status = $status;
        $this->workerOptions = $workerOptions;
<<<<<<< HEAD
=======
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
>>>>>>> 7e25601777803cff0484a0f03587d1acb226dcf0
    }
}
