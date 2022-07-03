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
        $Charge->type_charge_id=$request->input('type_charge_id');
        $Charge->type_frequence_paiement_charge_id=$request->input('type_frequence_paiement_charge_id');
        $Charge->montant=$request->input('montant');
        $Charge->motif=$request->input('motif');
        $Charge->frequence_paiement=$request->input('frequence_paiement');

        $Charge->save();
        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerCharge',['listeCharges'=> Charge::all()]);
    }
}
