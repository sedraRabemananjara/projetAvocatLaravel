<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerListerAgenda extends Controller
{
    public function getAllAgendas(Request $req){
        Agenda::all();
        return view('pageListerAgenda',['listeagendas'=> Agenda::all()]);
    }
}
