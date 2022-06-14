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
            "renvoi" => "required",
            "motif" => "required",
            "date" => "required",
        ]);

        $agenda = new Agenda();
        $agenda->enregistrement_id = $request->input('idEnregistrement');
        $agenda->renvoi = $request->input('renvoi');
        $agenda->motif = $request->input('motif');
        $agenda->espace_conclusion = $request->input('espaceConclusion');
        $agenda->date = $request->input('date');

        return $agenda->save();
    }
}
