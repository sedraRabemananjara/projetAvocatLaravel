<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;
use Illuminate\Support\Facades\Auth;

class ControllerListerAgenda extends Controller
{
    public function getAllAgenda(Request $req)
    {
        $agendas = Agenda::join('enregistrements', 'enregistrements.id', '=', 'agendas.enregistrement_id')
            ->where('enregistrements.idUser', '=', Auth::user()->id)
            ->select(['agendas.id', 'agendas.enregistrement_id', 'date', 'renvoi', 'motif', 'espace_conclusion', 'enregistrements.id as dossier'])
            ->get();
        return $agendas;
    }
}
