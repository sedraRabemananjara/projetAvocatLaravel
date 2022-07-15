<?php

namespace App\Http\Controllers\comptabiliteHonoraire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteHonoraire;

class ControllerListerComptabiliteHonoraires extends Controller
{
    public function getAllComptabiliteHonoraire(Request $req){
        ComptabiliteHonoraire::all();
        return ComptabiliteHonoraire::all();
        //return view('pageListerComptabiliteHonoraire',['listeComptabiliteHonoraires'=> ComptabiliteHonoraire::all()]);
    }
}
