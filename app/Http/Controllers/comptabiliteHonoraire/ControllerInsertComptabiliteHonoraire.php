<?php

namespace App\Http\Controllers\comptabiliteHonoraire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteHonoraire;


class ControllerInsertComptabiliteHonoraire extends Controller
{
    public function insert(Request $request)
    {
        request()->validate([
            "enregistrement_id" => "required",
            "motif" => "required",
            "montant" => "required",
            "paye_par" => "required",
            "recu_par" => "required",
            "recu_par" => "required",
        ]);

       $ComptabiliteHonoraire = new ComptabiliteHonoraire();
        $ComptabiliteHonoraire->enregistrement_id=$request->input('enregistrement_id');
        $ComptabiliteHonoraire->motif=$request->input('motif');
        $ComptabiliteHonoraire->montant=$request->input('montant');
        $ComptabiliteHonoraire->paye_par=$request->input('paye_par');
        $ComptabiliteHonoraire->recu_par=$request->input('recu_par');
        $ComptabiliteHonoraire->remarque=$request->input('remarque');

        return  $ComptabiliteHonoraire->save();

       /* return ComptabiliteHonoraire::create([
            "enregistrement_id"=>request('enregistrement_id'),
            "motif"=>request('motif'),
            "montant"=>request('montant'),
            "paye_par"=>request('paye_par'),
            "recu_par"=>request('recu_par'),
            "remarque"=>request('remarque'),

        ]);*/


    }
}
