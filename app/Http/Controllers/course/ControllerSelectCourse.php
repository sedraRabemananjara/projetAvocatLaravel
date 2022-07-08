<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\Models\Course;

class ControllerSelectCourse extends Controller
{
    public function getCourse($id)
    {
        return Course::where('id', $id)->get();
    }

}
