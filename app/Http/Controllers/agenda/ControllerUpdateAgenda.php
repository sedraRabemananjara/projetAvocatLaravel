<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;
use Illuminate\Support\Facades\DB;

class ControllerUpdateAgenda extends Controller
{

    public function update()
    {
        /*request()->validate([
            'idEnregistrement' => 'required',
            'renvoi' => 'required',
            'motif' => 'required',
            'espaceConclusion' => 'required',
            'idCourse' => 'required',
            'dateTimeAgenda' => 'required',
        ]);*/

        return DB::table('agendas')
            ->where('id', request('id'))
            ->update([
                'enregistrement_id' => request('idEnregistrement'),
                'type_renvoi_id' => request('typeRenvoi'),
                'motif' => request('motif'),
                'espace_conclusion' => request('espaceConclusion'),
                'date_agenda' => request('dateAgenda'),
                'salle' => request('salle'),
            ]);
    }
}
