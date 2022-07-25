<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class ControllerListerCourse extends Controller
{
    public function getAllCourses($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = env('PAGINATION');
        $courses = Course::join('enregistrements', 'enregistrements.id', '=', 'courses.enregistrement_id')
            ->orderBy('courses.created_at', 'desc')
            ->select(['courses.id', 'courses.enregistrement_id', 'date_necessite', 'travaux_a_faire', 'resultat', 'responsable', 'enregistrements.id as dossier', 'courses.created_at', 'fini', 'date_ordre', 'enregistrements.procedure'])
            ->offset($offset)
            ->limit($limit)
            ->get();
        // Log::info($courses);
        return $courses;
    }


    public function getAllCoursesRecherche($page = 0, $information = "")
    {
        $offset = env('PAGINATION') * $page;
        $limit = env('PAGINATION');
        $courses = Course::join('enregistrements', 'enregistrements.id', '=', 'courses.enregistrement_id')
            ->select(['courses.id', 'courses.enregistrement_id', 'date_necessite', 'travaux_a_faire', 'resultat', 'responsable', 'enregistrements.id as dossier', 'courses.created_at', 'fini', 'enregistrements.procedure'])
            ->orderBy('courses.created_at', 'desc')
            ->where('enregistrements.id', 'LIKE', '%' . $information . '%')
            ->orWhere('enregistrements.procedure', 'LIKE', '%' . $information . '%')
            ->orWhere('enregistrements.pour', 'LIKE', '%' . $information . '%')
            ->offset($offset)
            ->limit($limit)
            ->get();
        return $courses;
    }
}
