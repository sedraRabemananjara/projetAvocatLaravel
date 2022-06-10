<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControllerListerAgenda extends Controller
{
    public function getAllAgendas(Request $req){
        return view('pageListerAgenda',['listeagendas'=> course::all()]);
    }
}
