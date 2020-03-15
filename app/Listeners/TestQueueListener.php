<?php

namespace App\Listeners;

use App\Events\testevent;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestQueueListener implements ShouldQueue
{
    use  InteractsWithQueue, Queueable, SerializesModels;
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  testevent  $event
     * @return void
     */
    public function handle(testevent $event)
    {
        logger('write to queue');
    }
}
