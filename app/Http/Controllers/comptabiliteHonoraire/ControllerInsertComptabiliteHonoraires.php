<?php

namespace App\Http\Controllers\comptabiliteHonoraire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteHonoraire;

class ControllerInsertComptabiliteHonoraires extends Controller
{
    public function insert(Request $request)
    {
        
        $ComptabiliteHonoraire = new ComptabiliteHonoraire();
        $ComptabiliteHonoraire->idEnregistrement=$request->input('idEnregistrement');
        $ComptabiliteHonoraire->idAvocat=$request->input('idAvocat');
        $ComptabiliteHonoraire->especeRecu=$request->input('especeRecu');
        $ComptabiliteHonoraire->dateReception=$request->input('dateReception');

        $ComptabiliteHonoraire->save();
        return view('formulaireInsertionComptabiliteHonoraire');

        /*return redirect()
            ->route('formulaireInsertionComptabiliteHonoraire')
            ->with('succes', 'Enregistrement ComptabiliteHonoraire effectué');*/

        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerComptabiliteHonoraire',['listeComptabiliteHonoraires'=> ComptabiliteHonoraire::all()]);
    }
}
