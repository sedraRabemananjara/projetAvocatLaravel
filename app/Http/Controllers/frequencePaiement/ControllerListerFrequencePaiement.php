<?php

namespace App\Http\Controllers\frequencePaiement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeFrequencePaiementCharge;

class ControllerListerFrequencePaiement extends Controller
{
    public function getAllFrequencePaiements(Request $req)
    {
        return TypeFrequencePaiementCharge::all();
        //return view('pageListerFrequencePaiement',['listeFrequencePaiements'=> FrequencePaiement::all()]);
    }
}
