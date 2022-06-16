<?php

namespace App\Http\Controllers\comptabiliteGenerale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteGenerale;
use Illuminate\Support\Facades\DB;

class ControllerUpdateComptabiliteGenereles extends Controller
{
    public function update($id)
    {
       request()->validate([
            'id_comptabilite_honoraires' => 'required',
            'id_comptabilite_frais' => 'required',
            'especeRecu' => 'required',
        ]);

        $ComptabiliteGenerale = DB::table('comptabilite_generales')
                        ->where('id_comptabilite_generales', $id)
                        ->update([
                            'id_comptabilite_honoraires' => request('id_comptabilite_honoraires'),
                            'id_comptabilite_frais' => request('id_comptabilite_frais'),
                            'especeRecu' => request('especeRecu'),
                        ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
