<?php

namespace App\Http\Controllers\charge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Charge;

class ControllerListerCharge extends Controller
{
    public function getAllAgendas(Request $req){
        Charge::all();
        return view('pageListerCharge',['listeCharge'=> Charge::all()]);
    }
}
