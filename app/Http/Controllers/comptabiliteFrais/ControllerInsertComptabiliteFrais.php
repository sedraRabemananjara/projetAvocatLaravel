<?php

namespace App\Http\Controllers\comptabiliteFrais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComptabiliteFrais;
use Illuminate\Support\Facades\DB;

class ControllerInsertComptabiliteFrais extends Controller
{
    public function insert(Request $request)
    {
        request()->validate([
            "enregistrement_id" => "required",
            "motif" => "required",
            "montant" => "required",
            "paye_par" => "required",
            "recu_par" => "required",
        ]);
        $ComptabiliteFrais = new ComptabiliteFrais();
        $ComptabiliteFrais->enregistrement_id = $request->input('enregistrement_id');
        $ComptabiliteFrais->motif = $request->input('motif');
        $ComptabiliteFrais->montant = $request->input('montant');
        $ComptabiliteFrais->paye_par = $request->input('paye_par');
        $ComptabiliteFrais->recu_par = $request->input('recu_par');
        $ComptabiliteFrais->remarque = $request->input('remarque');


        return $ComptabiliteFrais->save();


        /*return redirect()
            ->route('formulaireInsertionComptabiliteFrais')
            ->with('succes', 'Enregistrement ComptabiliteFrais effectué');*/

        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerComptabiliteFrais',['listeComptabiliteFraiss'=> ComptabiliteFrais::all()]);
    }
}
