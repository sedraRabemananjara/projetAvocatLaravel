<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;
use Illuminate\Support\Facades\DB;

class ControllerInsertCourse extends Controller
{
    public function insert(Request $request)
    {
        request()->validate([
            "idEnregistrement" => "required",
            "TAF" => "required",
            "dateNecessite" => "required",
            "resultat" => "required",
            "responsable" => "required",
        ]);

        return Course::create([
            "enregistrement_id" => request("idEnregistrement"),
            "TAF" => request("TAF"),
            "date_necessite" => request("dateNecessite"),
            "resultat" => request("resultat"),
            "responsable" => request("responsable"),
            "fini" => request("fini"),
        ]);

        /*$course = new Course();
        $course->enregistrement_id = $request->input('idEnregistrement');
        $course->agenda_id = $request->input('idAgenda');
        $course->TAF = $request->input('TAF');
        $course->date_necessite = $request->input('dateNecessite');
        $course->resultat = $request->input('resultat');
        $course->responsable = $request->input('responsable');
        $course->created_at = DB::raw('CURRENT_TIMESTAMP');
        $course->fini = false;

        return $course->save();*/
    }
}
