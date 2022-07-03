<?php

namespace App\Http\Controllers\frequencePaiement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\TypeFrequencePaiementCharge;

class ControllerDeleteFrequencePaiement extends Controller
{
    public function delete($id){
        $FrequencePaiement=TypeFrequencePaiementCharge::find($id);
        $FrequencePaiement->delete();
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
