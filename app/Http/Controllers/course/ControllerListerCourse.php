<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;
use Illuminate\Support\Facades\Auth;

class ControllerListerCourse extends Controller
{
    public function getAllCourses($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = env('PAGINATION');
        $courses = Course::join('enregistrements', 'enregistrements.id', '=', 'courses.enregistrement_id')

            ->where('enregistrements.user_id', '=', Auth::user()->id)
            ->select(['courses.id', 'courses.enregistrement_id', 'date_necessite', 'travaux_a_faire', 'resultat', 'responsable', 'enregistrements.id as dossier', 'courses.created_at'])
            ->offset($offset)
            ->limit($limit)
            ->get();
        return $courses;
    }


    public function getAllCoursesRecherche($page = 0, $information)
    {
        $offset = env('PAGINATION') * $page;
        $limit = env('PAGINATION');
        $courses = Course::join('enregistrements', 'enregistrements.id', '=', 'courses.enregistrement_id')
            ->select(['courses.id', 'courses.enregistrement_id', 'date_necessite', 'travaux_a_faire', 'resultat', 'responsable', 'enregistrements.id as dossier', 'courses.created_at'])
            ->where('enregistrements.id', 'LIKE', '%' . $information . '%')
            ->orWhere('enregistrements.procedure', 'LIKE', '%' . $information . '%')
            ->orWhere('enregistrements.pour', 'LIKE', '%' . $information . '%')
            ->offset($offset)
            ->limit($limit)
            ->get();
        return $courses;
    }
}
