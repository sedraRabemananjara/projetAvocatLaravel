<?php

namespace App\Http\Controllers\comptabiliteHonoraire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteFrais;
use Illuminate\Support\Facades\DB;

class ControllerUpdateComptabiliteHonoraires extends Controller
{
    public function update($id)
    {
       request()->validate([
            'idEnregistrement' => 'required',
            'idAvocat' => 'required',
            'especeRecu' => 'required',
            'dateReception' => 'required',
        ]);

        $ComptabiliteFrais = DB::table('comptabilite_honoraire')
                        ->where('id_comptabilite_honoraires', $id)
                        ->update([
                            'idEnregistrement' => request('idEnregistrement'),
                            'idAvocat' => request('idAvocat'),
                            'especeRecu' => request('especeRecu'),
                            'dateReception' => request('dateReception'),
                            ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
