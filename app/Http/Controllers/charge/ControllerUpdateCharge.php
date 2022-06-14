<?php

namespace App\Http\Controllers\charge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Charge;
use Illuminate\Support\Facades\DB;

class ControllerUpdateCharge extends Controller
{
    public function update($id)
    {
       request()->validate([
            'typeCharge' => 'required',
            'montant' => 'required',
            'idFrequence' => 'required',
        ]);

        $Charge = DB::table('charges')
                        ->where('idCharge', $id)
                        ->update([
                            'typeCharge' => request('typeCharge'),
                            'montant' => request('montant'),
                            'idFrequence' => request('idFrequence'),
                        ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
