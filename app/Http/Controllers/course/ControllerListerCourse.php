<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;
use Illuminate\Support\Facades\Auth;

class ControllerListerCourse extends Controller
{
    public function getAllCourses(Request $req)
    {
        $courses = Course::join('enregistrements', 'enregistrements.id', '=', 'courses.enregistrement_id')
            ->where('enregistrements.user_id', '=', Auth::user()->id)
            ->select(['courses.id', 'courses.enregistrement_id', 'date_necessite', 'TAF', 'resultat', 'responsable', 'enregistrements.id as dossier', 'courses.created_at'])
            ->get();
        return $courses;
    }
}
