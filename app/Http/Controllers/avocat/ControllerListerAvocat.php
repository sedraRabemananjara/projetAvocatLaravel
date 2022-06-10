<?php

namespace App\Http\Controllers\avocat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerListerAvocat extends Controller
{
    public function getAllAvocats(Request $req){
        Avocat::all();
        return view('pageListerAgenda',['listeagendas'=> Avocat::all()]);
    }
}
