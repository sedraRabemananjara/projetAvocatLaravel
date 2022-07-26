<?php

namespace App\Http\Controllers\enregistrement;

use App\Events\AgendaCreatedEvent;
use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use App\Models\Agenda;
use Illuminate\Support\Facades\Auth;

class ControllerInsertEnregistrement extends Controller
{
    public function insert()
    {
        // validation champs enregistrements
        request()->validate([
            "pour" => "required",
            "contre" => "required",
            "nature" => "required",
            "juridiction" => "required",
            "procedure" => "required",
            "lieu" => "required",
        ]);

        // validation champs agenda
        if (
            request("typeRenvoi") != null ||
            request("motif") != null ||
            request("salle") != null
        ) {
            request()->validate([
                "typeRenvoi" => "required",
                "motif" => "required",
                "salle" => "required",
            ]);
        }


        // controle du regex du procedure
        /* $pregProcedure = preg_match("/[0-9]{0,} *\/ *[0-9]{2,2}/", request("procedure"));
        if ($pregProcedure === 0) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'procedure' => ['validation.regex'],
            ]);
            throw $error;
        } */


        $enregistrement =  Enregistrement::create([
            "user_id" => Auth::user()->id,
            "lieu" => request("lieu"),
            "pour" => request("pour"),
            "contre" => request("contre"),
            "nature_id" => request("nature"),
            "juridiction_id" => request("juridiction"),
            "section_juridiction_id" => request("sectionJuridiction"),
            "procedure" => request("procedure"),
            "adresse_client" => request("adresseClient"),
            "telephone_client" => request("telephoneClient"),
            "email_client" => request("emailClient"),
            "email_interlocuteur" => request("emailInterloc"),
            "telephone_interlocuteur" => request("telephoneInterloc"),
            "date_delais_paiement" => request("dateDelaisPaiement"),
            "montant_honoraire" => request("montantHonoraire"),
            "envoi_mail_automatique" => 1,
        ]);

        $agenda = null;

        if (
            request("typeRenvoi") != null &&
            request("motif") != null &&
            request("salle") != null
        ) {
            $agenda = Agenda::create([
                "enregistrement_id" => $enregistrement->id,
                "type_renvoi_id" => request('typeRenvoi'),
                "motif" => request("motif"),
                "date_agenda" => request("dateAgenda"),
                "salle" => request("salle"),
                "espace_conclusion" => request("espaceConclusion"),
            ]);

            event(new AgendaCreatedEvent($agenda, $enregistrement));
        }

        return [$enregistrement, $agenda];
    }
}
