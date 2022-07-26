<?php

namespace App\Http\Controllers\frequencePaiement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeFrequencePaiementCharge;

class ControllerInsertFrequencePaiement extends Controller
{
    public function insert(Request $request)
    {
        $FrequencePaiement = new TypeFrequencePaiementCharge();
        $FrequencePaiement->nomFrequence = $request->input('nomFrequence');

        $FrequencePaiement->save();
    }
}
