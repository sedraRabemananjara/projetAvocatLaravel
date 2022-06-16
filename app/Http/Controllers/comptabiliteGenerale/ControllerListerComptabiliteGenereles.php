<?php

namespace App\Http\Controllers\comptabiliteGenerale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteGenerale;

class ControllerListerComptabiliteGenereles extends Controller
{
    public function getAllComptabiliteGenerale(Request $req){
        ComptabiliteGenerale::all();
        return view('pageListerComptabiliteGenerale',['ComptabiliteGenerale'=> ComptabiliteFrais::all()]);
    }
}
