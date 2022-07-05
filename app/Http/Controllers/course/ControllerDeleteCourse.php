<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\models\Course;

class ControllerDeleteCourse extends Controller
{
    public function delete()
    {
        request()->validate([
            'id' => 'required',
        ]);

        return Course::where('id', request('id'))
            ->delete();
        //return redirect('/')->with('deleted','Kamar Theresia deleted successfully');
    }
}
