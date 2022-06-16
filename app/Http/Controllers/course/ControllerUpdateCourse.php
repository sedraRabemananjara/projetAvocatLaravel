<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Course;
use Illuminate\Support\Facades\DB;

class ControllerUpdateCourse extends Controller
{
    public function update($id)
    {
        request()->validate([
            'idEnregistrement' => 'required',
            'TAF' => 'required',
            'dateTimeCourse' => 'required',
            'resultat' => 'required',
            'addresseAvocat' => 'required',
        ]);

        $avocat = DB::table('courses')
                        ->where('idCourse', $id)
                        ->update([
                            'idEnregistrement' => request('idEnregistrement'),
                            'TAF' => request('TAF'),
                            'dateTimeCourse' => request('dateTimeCourse'),
                            'resultat' => request('resultat'),
                            'responsable' => request('responsable'),
                        ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }

  
}
