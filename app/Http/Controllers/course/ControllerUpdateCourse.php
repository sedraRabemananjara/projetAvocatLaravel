<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\DB;

class ControllerUpdateCourse extends Controller
{
    public function update()
    {
        /*request()->validate([
            'idEnregistrement' => 'required',
            'TAF' => 'required',
            'dateTimeCourse' => 'required',
            'resultat' => 'required',
            'addresseAvocat' => 'required',
        ]);*/

        return DB::table('courses')
            ->where('id', request('id'))
            ->update([
                'enregistrement_id' => request('enregistrement'),
                'travaux_a_faire' => request('TAF'),
                'date_necessite' => request('dateNecessite'),
                'resultat' => request('resultat'),
                'responsable' => request('responsable'),
                'fini' => request('fini'),
            ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
