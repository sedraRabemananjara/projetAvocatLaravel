<?php

namespace App\Http\Controllers\calendrier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\ViewSelectEnregistrementCourseEtAgendaParAvocat;

class ControlleurSelectEnregistrementCourseEtAgendaParAvocat extends Controller
{
    public function getEnregistrementsAndCoursesAndAgendaByAvocat($id){
      
        $enregistrement = ViewSelectEnregistrementCourseEtAgendaParAvocat::select("*")
                        ->where('user_id', $id)
                        ->get()
                        ->toArray();
        var_dump($enregistrement);
        return $enregistrement;
    
    }

    public function getEnregistrementsAndCoursesAndAgendaByAvocatGrouperParEnregistrements($id,$idE){
      
        $enregistrement = ViewSelectEnregistrementCourseEtAgendaParAvocat::select("*")
                        ->where('user_id', $id)
                        ->where('id_enregistrement', $idE)
                        ->get();
                        
        return view('email',compact('enregistrement'));
    
    }
}
