<?php

namespace App\Listeners;

use App\Events\TastEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TaskEventListner
{
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
     * @param  TastEvent  $event
     * @return void
     */
    public function handle(TastEvent $event)
    {
        //
    }
}
