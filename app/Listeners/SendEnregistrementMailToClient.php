<?php

namespace App\Listeners;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailAvancementDossier;

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
        try {
            Mail::send(new MailAvancementDossier($event->agenda));
        } catch (\Throwable $th) {
            Log::info($th);
        }
    }
}
