<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ControllerListerCourse extends Controller
{
    public function getAllCourses(Request $req)
    {   $courses=DB::table('courses')->select('courses.id', 'courses.enregistrement_id', 'courses.date_necessite', 'courses.travaux_a_faire', 'courses.resultat', 'courses.responsable', 'courses.date_ordre',"enregistrements.user_id","fini")
            //->where('enregistrements.user_id', '=', Auth::user()->id)
            ->join('enregistrements', 'enregistrements.id', '=', 'courses.enregistrement_id')
            ->where('enregistrements.user_id', '=',18)
            ->get();
        return $courses;
    }

   /* public function getAllCourses(Request $req)
    {
        return Course::all();
    }*/
}
