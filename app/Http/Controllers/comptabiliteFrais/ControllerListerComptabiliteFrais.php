<?php

namespace App\Http\Controllers\comptabiliteFrais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteFrais;

class ControllerListerComptabiliteFrais extends Controller
{
    public function getAllComptabiliteFrais(Request $req){
        ComptabiliteFrais::all();
        return view('pageListerComptabiliteFrais',['listeComptabiliteFraiss'=> ComptabiliteFrais::all()]);
    }
}
