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
            ->join('type_renvois', 'agendas.type_renvoi_id', 'type_renvois.id')
            ->where('enregistrements.user_id', '=', Auth::user()->id)
            ->select([
                'agendas.id',
                'agendas.enregistrement_id', 'agendas.created_at',
                'motif', 'espace_conclusion',
                'enregistrements.id as dossier', 'salle',
                'date_agenda', 'type_renvois.type', 'type_renvois.degre'
            ])
            ->get();
        return $agendas;
    }
}
