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
        }

        return $agendas; */
    }

}
