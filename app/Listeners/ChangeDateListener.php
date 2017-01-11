<?php

namespace App\Listeners;

use App\Events\ChangeDataEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ChangeDateListener
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
     * @param  ChangeDataEvent  $event
     * @return void
     */
    public function handle(ChangeDataEvent $event)
    {
        //
    }
}
