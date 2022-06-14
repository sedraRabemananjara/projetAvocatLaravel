<?php

namespace App\Http\Controllers\etat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Etat;

class ControllerListerEtat extends Controller
{
    public function getAllEtats(Request $req){
        Etat::all();
        return view('pageListerEtat',['listeEtats'=> Etat::all()]);
    }
}
