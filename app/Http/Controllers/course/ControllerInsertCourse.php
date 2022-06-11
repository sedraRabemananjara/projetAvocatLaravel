<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;


class ControllerInsertCourse extends Controller
{
    public function insert(Request $request)
    {
        $course = new Course();
        $course->idEnregistrement=$request->input('idEnregistrement');
        $course->TAF=$request->input('TAF');
        $course->dateTimeCourse=$request->input('dateTimeCourse');
        $course->resultat=$request->input('resultat');
        $course->responsable=$request->input('responsable');

        $course->save();
        /*return redirect()
        ->route('formulaireInsertionCourse')
        ->with('succes', 'Enregistrement effectué');
        */
        return view('formulaireInsertionCourse')
        ->with('succes', 'Enregistrement effectué');

        //return view("controlpanel.products");
        //$employe=new Employe;
        //$employe-> nom = $req->input('nom');;
        //$employe-> is_complete =0;
        //$employe->save();
        //return view('pageListerCourse',['listecourses'=> course::all()]);
    }
}
