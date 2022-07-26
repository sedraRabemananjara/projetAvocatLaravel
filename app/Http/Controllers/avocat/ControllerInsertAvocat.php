<?php

namespace App\Http\Controllers\avocat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avocat;

class ControllerInsertAvocat extends Controller
{
    public function insert(Request $request)
    {
        $Avocat = new Avocat();
        $Avocat->mdp = $request->input('mdp');
        $Avocat->nom = $request->input('nom');
        $Avocat->prenom = $request->input('prenom');
        $Avocat->mailAvocat = $request->input('mailAvocat');
        $Avocat->addresseAvocat = $request->input('addresseAvocat');
        $Avocat->contactAvocat = $request->input('contactAvocat');
        $Avocat->save();
        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerAvocat',['listeAvocats'=> Avocat::all()]);
    }
}
