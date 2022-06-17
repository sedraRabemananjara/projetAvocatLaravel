<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerInsertAgenda extends Controller
{


    public function insert(Request $request)
    {
        request()->validate([
            "idEnregistrement" => "required",
            "typeRenvoi" => "required",
            "motif" => "required",
            "dateAgenda" => "required",
            "salle" => "required",
        ]);

        return Agenda::create([
            "enregistrement_id" => request('idEnregistrement'),
            "type_renvoi_id" => request('typeRenvoi'),
            "motif" => request("motif"),
            "date_agenda" => request("dateAgenda"),
            "salle" => request("salle"),
            "espace_conclusion" => request("espaceConclusion"),
        ]);

        /*$agenda = new Agenda();
        $agenda->enregistrement_id = $request->input('idEnregistrement');
        $agenda->type_renvoi_id = $request->input('typeRenvoi');
        $agenda->motif = $request->input('motif');
        $agenda->espace_conclusion = $request->input('espaceConclusion');
        $agenda->date = $request->input('date');

        return $agenda->save();*/
    }
}
