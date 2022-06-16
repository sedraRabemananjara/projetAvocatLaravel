<?php

namespace App\Http\Controllers\etat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Etat;

class ControllerInsertEtat extends Controller
{
    public function insert(Request $request)
    {
        request()->validate([
            'idEnregistrement' => 'required',
        ]);
        $Etat = new Etat();
        $Etat->idEnregistrement=$request->input('idEnregistrement');
        
        $Etat->save();
        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerEtat',['listeEtats'=> Etat::all()]);
    }
}
