<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;

class ControllerDeleteCourse extends Controller
{
    public function delete($id){
        $course=Course::find($id);  
        $course->delete();  
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
