<?php

namespace App\Http\Controllers\frequencePaiement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\FrequencePaiement;

class ControllerDeleteFrequencePaiement extends Controller
{
    public function delete($id){
        $FrequencePaiement=FrequencePaiement::find($id);  
        $FrequencePaiement->delete();  
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
