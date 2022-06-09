<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;

class ControllerListerEnregistrement extends Controller
{
    public function getAllEnregistrements(){
        return view('pageListerEnregistrement',['listeEnregistrements'=> Enregistrement::all()]);
    }
}
