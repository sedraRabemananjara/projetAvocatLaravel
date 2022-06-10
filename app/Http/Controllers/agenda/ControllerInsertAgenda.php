<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerInsertAgenda extends Controller
{
  
    
    public function insert(Request $request)
    {
        
        $agenda = new Agenda();
        $agenda->idEnregistrement=$request->input('idEnregistrement');
        $agenda->renvoi=$request->input('renvoi');
        $agenda->motif=$request->input('motif');
        $agenda->idCourse=$request->input('idCourse');
        $agenda->dateTimeAgenda=$request->input('dateTimeAgenda');

        $agenda->save();
        return redirect()
            ->route('ajouter-agenda')
            ->with('succes', 'Enregistrement agenda effectué');

        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerAgenda',['listeAgendas'=> Agenda::all()]);
    }
}
