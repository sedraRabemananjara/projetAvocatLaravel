<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\models\Course;

class ControllerDeleteCourse extends Controller
{
    public function delete($idCourses)
    {

        return Course::where('id', $idCourses)
            ->delete();
    }
}
