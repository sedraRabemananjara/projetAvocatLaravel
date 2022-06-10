<?php

namespace App\Http\Controllers\frequencePaiement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\FrequencePaiement;

class ControllerInsertFrequencePaiement extends Controller
{
    public function insert(Request $request)
    {
        $FrequencePaiement = new FrequencePaiement();
        $FrequencePaiement->nomFrequence=$request->input('nomFrequence');
        
        $FrequencePaiement->save();
        }
}
