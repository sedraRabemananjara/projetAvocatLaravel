<?php

namespace App\Http\Controllers\comptabiliteFrais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComptabiliteFrais;
use Illuminate\Support\Facades\DB;

class ControllerUpdateComptabiliteFrais extends Controller
{
    public function update($id)
    {
        request()->validate([
            'idEnregistrement' => 'required',
            'coutActes' => 'required',
            'fraisProcedure' => 'required',
            'date' => 'required',
            'entite' => 'required',
            'especeRecu' => 'required',
            'motif' => 'required',
            'remarque' => 'required',
        ]);

        $ComptabiliteFrais = DB::table('comptabilite_frais')
            ->where('id_comptabilite_frais', $id)
            ->update([
                'idEnregistrement' => request('idEnregistrement'),
                'coutActes' => request('coutActes'),
                'fraisProcedure' => request('fraisProcedure'),
                'date' => request('date'),
                'entite' => request('entite'),
                'especeRecu' => request('especeRecu'),
                'motif' => request('motif'),
                'remarque' => request('remarque'),
            ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
