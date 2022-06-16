<?php

namespace App\Http\Controllers\avocat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Avocat;

class ControllerInsertAvocat extends Controller
{
    public function insert(Request $request)
    {
        request()->validate([
            'mdp' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'mailAvocat' => 'required',
            'addresseAvocat' => 'required',
            'contactAvocat' => 'required',
        ]);
        $Avocat = new Avocat();
        $Avocat->mdp=$request->input('mdp');
        $Avocat->nom=$request->input('nom');
        $Avocat->prenom=$request->input('prenom');
        $Avocat->mailAvocat=$request->input('mailAvocat');
        $Avocat->addresseAvocat=$request->input('addresseAvocat');
        $Avocat->contactAvocat=$request->input('contactAvocat');
        $Avocat->save();
        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerAvocat',['listeAvocats'=> Avocat::all()]);
    }
}
