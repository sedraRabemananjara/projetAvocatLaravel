<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;


class ControllerUpdateCourse extends Controller
{
    public function edit($idCourse){
        $course= Course::find($idCourse);  
        return view('modifierCourse', compact('course'));  
    }
    

    public function update(Request $request, $idCourse)  
    {  
        //    
        $course = Course::find();  
         
        $course->idEnregistrement=$request->get('idEnregistrement');
        $course->TAF=$request->get('TAF');
        $course->dateTimeCourse=$request->get('dateTimeCourse');
        $course->resultat=$request->get('resultat');
        $course->responsable=$request->get('responsable');
        
        $course->save();  
        //return view('pageLister',['listecourses'=> course::all()]);
    }  
}
