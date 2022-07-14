<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use Illuminate\Http\Request;

class ControllerSelectAgenda extends Controller
{
    public function getAgenda($id)
    {
        return Agenda::where('agendas.id', $id)
            ->join('enregistrements', 'enregistrements.id', '=', 'agendas.enregistrement_id')
            ->select([
                'agendas.*',
                'enregistrements.procedure'
            ])
            ->get();
    }
}
