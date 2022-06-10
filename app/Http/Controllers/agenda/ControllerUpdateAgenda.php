<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerUpdateAgenda extends Controller
{
    public function edit($idCourse){
        $course= Agenda::find($idCourse);  
        return view('modifierCourse', compact('course'));  
    }
    

    public function update(Request $request, $idCourse)  
    {  
        //    
        $agenda = Agenda::find();  
         
        $agenda->idEnregistrement=$request->input('idEnregistrement');
        $agenda->renvoi=$request->input('renvoi');
        $agenda->motif=$request->input('motif');
        $agenda->idCourse=$request->input('idCourse');
        $agenda->dateTimeAgenda=$request->input('dateTimeAgenda');

        $agenda->save(); 
        //return view('pageLister',['listecourses'=> course::all()]);
    } 
}
