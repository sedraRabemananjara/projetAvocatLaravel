<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;
use Illuminate\Support\Facades\Auth;

class ControllerListerAgenda extends Controller
{
    public function getAllAgenda($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $agendas = Agenda::join('enregistrements', 'enregistrements.id', '=', 'agendas.enregistrement_id')
            ->join('type_renvois', 'agendas.type_renvoi_id', 'type_renvois.id')
            ->select([
                'agendas.id',
                'agendas.enregistrement_id', 'agendas.created_at',
                'motif', 'espace_conclusion',
                'enregistrements.id as dossier', 'salle',
                'enregistrements.procedure',
                'date_agenda', 'type_renvois.type', 'type_renvois.degre', 'type_renvois.id as type_renvois_id'
            ])
            ->offset($offset)
            ->limit($limit)
            ->get();
        return $agendas;
    }

    public function getAllAgendaRecherche($page = 0, $information)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $agendas = Agenda::join('enregistrements', 'enregistrements.id', '=', 'agendas.enregistrement_id')
            ->join('type_renvois', 'agendas.type_renvoi_id', 'type_renvois.id')
            ->select([
                'agendas.id',
                'agendas.enregistrement_id', 'agendas.created_at',
                'motif', 'espace_conclusion',
                'enregistrements.id as dossier', 'salle',
                'enregistrements.procedure',
                'date_agenda', 'type_renvois.type', 'type_renvois.degre', 'type_renvois.id as type_renvois_id'
            ])
            ->where('enregistrements.id', 'LIKE', '%' . $information . '%')
            ->orWhere('enregistrements.procedure', 'LIKE', '%' . $information . '%')
            ->orWhere('enregistrements.pour', 'LIKE', '%' . $information . '%')
            ->offset($offset)
            ->limit($limit)
            ->get();
        return $agendas;
    }
}
