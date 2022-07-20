<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Agenda;
use App\Models\User;
use App\Models\Course;
use App\Models\ViewSelectEnregistrementCourseEtAgendaParAvocat;
use Illuminate\Support\Facades\DB;

class testMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data=[];

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Array $user)
    {
        $this->data=$user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('cab-razafimahefa@email.com')
                    ->subject('mon objet personaliser')
                    ->view('emails.test');
    }
}
