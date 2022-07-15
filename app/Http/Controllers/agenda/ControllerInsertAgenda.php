<?php

namespace App\Http\Controllers\agenda;

use App\Events\AgendaCreatedEvent;
use App\Http\Controllers\Controller;
use App\Http\Controllers\enregistrement\ControllerEnvoiMailEnregistrement;
use App\Listeners\AgendaCreatedListener;
use Illuminate\Http\Request;
use App\models\Agenda;
use App\Models\Enregistrement;

class ControllerInsertAgenda extends Controller
{


    public function insert()
    {
        request()->validate([
            "idEnregistrement" => "required",
            "typeRenvoi" => "required",
            "motif" => "required",
            "dateAgenda" => "required",
            "salle" => "required",
        ]);

        // insertion de l'agenda
        $agenda =  Agenda::create([
            "enregistrement_id" => request('idEnregistrement'),
            "type_renvoi_id" => request('typeRenvoi'),
            "motif" => request("motif"),
            "date_agenda" => request("dateAgenda"),
            "salle" => request("salle"),
            "espace_conclusion" => request("espaceConclusion"),
        ]);

        return $agenda;
    }
}
