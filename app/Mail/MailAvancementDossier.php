<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Agenda;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\Log;

class MailAvancementDossier extends Mailable
{
    use Queueable, SerializesModels;

    public $enregistrement = null;
    public $prochainAgenda = null;
    public $precedentAgenda = null;

    public $fichierPrecedentAgenda = null;



    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($prochainAgenda)
    {
        $this->prochainAgenda = $prochainAgenda;

        $this->enregistrement = Enregistrement::find($prochainAgenda->enregistrement_id);

        $precedentAgenda = Agenda::where('enregistrement_id', $prochainAgenda->enregistrement_id)
            ->offset(1)
            ->limit(1)
            ->orderBy('created_at', 'desc')
            ->get();

        if (count($precedentAgenda) == 1) {
            $this->precedentAgenda = $precedentAgenda[0];
            $this->fichierPrecedentAgenda = Agenda::getLienFichier($this->precedentAgenda->id);
        }
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        if ($this->fichierPrecedentAgenda == null) {
            return $this->to($this->enregistrement->email_client)
                ->from(env('MAIL_FROM_ADDRESS'))
                ->subject('Avancement de votre dossier : ' . $this->enregistrement->procedure)
                ->markdown('emails.avancement_dossier');
        } else {
            return $this->to($this->enregistrement->email_client)
                ->from(env('MAIL_FROM_ADDRESS'))
                ->subject('Avancement de votre dossier : ' . $this->enregistrement->procedure)
                /* ->attach($this->fichierPrecedentAgenda, [
                    'as' => "Dernière conclusion"
                ]) */
                ->markdown('emails.avancement_dossier');
        }
    }
}
