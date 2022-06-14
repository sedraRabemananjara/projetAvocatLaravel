<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerDeleteAgenda extends Controller
{
    public function delete($id){
        $course=Course::find($id);  
        $course->delete();  
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
