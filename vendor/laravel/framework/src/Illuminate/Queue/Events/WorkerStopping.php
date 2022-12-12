<?php

namespace Illuminate\Queue\Events;

class WorkerStopping
{
    /**
<<<<<<< HEAD
     * The exit status.
=======
     * The worker exit status.
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
     *
     * @var int
     */
    public $status;

    /**
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
>>>>>>> e82a15adacdba22fb721425e4f15531d994b77b2
    }
}
