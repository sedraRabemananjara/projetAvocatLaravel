<?php

namespace App\Http\Controllers\charge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Charge;

class ControllerInsertCharge extends Controller
{
    public function insert(Request $request)
    {
        $Charge = new Charge();
        $Charge->typeCharge=$request->input('typeCharge');
        $Charge->montant=$request->input('montant');
        $Charge->idFrequence=$request->input('idFrequence');
        
        $Charge->save();
        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerCharge',['listeCharges'=> Charge::all()]);
    }
}
