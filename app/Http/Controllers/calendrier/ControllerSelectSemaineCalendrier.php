<?php

namespace App\Http\Controllers\calendrier;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Enregistrement;
use Illuminate\Http\Request;

class ControllerSelectSemaineCalendrier extends Controller
{

    private static $SEMAINE_SELECTION = 1;

    public function select()
    {
        $enregistrements = Enregistrement::with("agendas")->all();
        var_dump($enregistrements);
        return $enregistrements;



        /*  $agendas = Agenda::all();
        foreach ($agendas as $agenda) {
            $agenda->enregistrement = $agenda->enregistrement();
        }*/

        return $agendas; 
    } 
    
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
