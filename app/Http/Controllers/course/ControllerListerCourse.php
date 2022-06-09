<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;

class ControllerListerCourse extends Controller
{
    public function getAllCourses(Request $req){
        return view('pageListerCourse',['listecourses'=> course::all()]);
    }
}
