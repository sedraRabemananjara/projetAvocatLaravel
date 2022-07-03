<?php

namespace App\Http\Controllers\comptabiliteFrais;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteFrais;

class ControllerInsertComptabiliteFrais extends Controller
{
    public function insert(Request $request)
    {

        $ComptabiliteFrais = new ComptabiliteFrais();
        $ComptabiliteFrais->idEnregistrement = $request->input('idEnregistrement');
        $ComptabiliteFrais->coutActes = $request->input('coutActes');
        $ComptabiliteFrais->fraisProcedure = $request->input('fraisProcedure');
        $ComptabiliteFrais->date = $request->input('date');
        $ComptabiliteFrais->entite = $request->input('entite');
        $ComptabiliteFrais->especeRecu = $request->input('especeRecu');
        $ComptabiliteFrais->motif = $request->input('motif');
        $ComptabiliteFrais->remarque = $request->input('remarque');

        $ComptabiliteFrais->save();
        return view('formulaireInsertionComptabiliteFrais');


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
