<?php

namespace App\Listeners;

use App\Events\AgendaCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendEnregistrementMailToClient
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
     * @param  \App\Events\AgendaCreatedEvent  $event
     * @return void
     */
    public function handle($event)
    {
        Log::info($event->agenda);
        Log::info($event->enregistrement);
    }
}
