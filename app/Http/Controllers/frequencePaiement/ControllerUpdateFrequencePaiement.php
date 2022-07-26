<?php

namespace App\Http\Controllers\frequencePaiement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeFrequencePaiementCharge;
use Illuminate\Support\Facades\DB;

class ControllerUpdateFrequencePaiement extends Controller
{
    public function update($id)
    {
        request()->validate([
            'nomFrequence' => 'required',
        ]);

        $FrequencePaiement = DB::table('type_frequence_paiement_charges')
            ->where('idFrequence', $id)
            ->update([
                'nomFrequence' => request('nomFrequence'),
            ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
