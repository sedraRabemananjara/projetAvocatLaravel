<?php

namespace App\Http\Controllers\charge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Charge;
use Illuminate\Support\Facades\DB;

class ControllerListerCharge extends Controller
{
    /*public function getAllCharge(){
        return Charge::all();
       // return view('pageListerCharge',['listeCharge'=> Charge::all()]);
    }*/

    public function getAllCharge()
    {
        $charges = Charge::join('type_charges', 'charges.type_charge_id', '=', 'type_charges.id')
            ->join('type_frequence_paiement_charges', 'charges.type_frequence_paiement_charge_id', '=', 'type_frequence_paiement_charges.id')
            ->select(['charges.*', 'type_charges.type', 'type_frequence_paiement_charges.frequence'])
            ->get();
        return $charges;
    }
}
