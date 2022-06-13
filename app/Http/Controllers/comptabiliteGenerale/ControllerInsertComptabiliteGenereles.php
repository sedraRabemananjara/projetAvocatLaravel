<?php

namespace App\Http\Controllers\comptabiliteGenerale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\ComptabiliteGenerale;


class ControllerInsertComptabiliteGenereles extends Controller
{
    public function insert(Request $request)
    {
        $ComptabiliteGenerale = new ComptabiliteGenerale();
        $ComptabiliteGenerale->id_comptabilite_honoraires=$request->input('id_comptabilite_honoraires');
        $ComptabiliteGenerale->id_comptabilite_frais=$request->input('id_comptabilite_frais');
        $ComptabiliteGenerale->especeRecu=$request->input('especeRecu');

        $ComptabiliteGenerale->save();
        return view('formulaireInsertionComptabiliteGenerale');


        /*return redirect()
            ->route('formulaireInsertionComptabiliteGenerale')
            ->with('succes', 'Enregistrement ComptabiliteGenerale effectué');*/

        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerComptabiliteGenerale',['listeComptabiliteGenerales'=> ComptabiliteGenerale::all()]);
    }
}
