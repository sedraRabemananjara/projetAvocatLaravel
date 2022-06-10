<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;
use Illuminate\Support\Facades\DB;

class ControllerUpdateAgenda extends Controller
{
    public function update($id)
    {
       request()->validate([
            'idEnregistrement' => 'required',
            'renvoi' => 'required',
            'motif' => 'required',
            'espaceConclusion' => 'required',
            'idCourse' => 'required',
            'dateTimeAgenda' => 'required',
        ]);

        $agenda = DB::table('agendas')
                        ->where('idAgenda', $id)
                        ->update([
                            'idEnregistrement' => request('idEnregistrement'),
                            'renvoi' => request('renvoi'),
                            'motif' => request('motif'),
                            'espaceConclusion' => request('espaceConclusion'),
                            'idCourse' => request('idCourse'),
                            'dateTimeAgenda' => request('dateTimeAgenda'),
                        ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
    

  
}
