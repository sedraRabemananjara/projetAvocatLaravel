<?php

namespace App\Http\Controllers\calendrier;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Enregistrement;


class ControlleurSelectEnregistrementCourseEtAgendaParAvocat extends Controller
{
    public function getEnregistrementsAndCoursesAndAgendaByAvocat($id){
      
        $enregistrement = Enregistrement::where('enregistrements.user_id', $id)
            ->join('agendas', 'agendas.enregistrement_id', 'enregistrements.id')
            ->join('courses', 'courses.enregistrement_id', 'enregistrements.id')
            ->select('enregistrements.*', 'courses.*', 'agendas.*')
            ->get();
        $enregistrement = $enregistrement[0];
        var_dump($enregistrement);
       
        //return view('calendrierAvocat');
    
    }
}
