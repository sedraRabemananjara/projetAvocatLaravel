<?php

namespace App\Http\Controllers\frequencePaiement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\FrequencePaiement;

class ControllerListerFrequencePaiement extends Controller
{
    public function getAllFrequencePaiements(Request $req){
        FrequencePaiement::all();
        return view('pageListerFrequencePaiement',['listeFrequencePaiements'=> FrequencePaiement::all()]);
    }
}
