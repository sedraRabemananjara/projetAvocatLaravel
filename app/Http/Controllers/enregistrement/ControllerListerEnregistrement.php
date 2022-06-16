<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;
use Illuminate\Support\Facades\DB;

class ControllerListerEnregistrement extends Controller
{
    public function getAllEnregistrements(){
        //$data = TonModel::where('x', '<>', 'y')->orderBy('created_at')->get();
        return view('pageListerEnregistrement',['listeEnregistrements'=> Enregistrement::all()]);
    }
}
