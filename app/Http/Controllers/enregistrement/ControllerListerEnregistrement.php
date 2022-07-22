<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Course;
use Illuminate\Http\Request;
use App\models\Enregistrement;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class ControllerListerEnregistrement extends Controller
{
    public function getAllEnregistrements($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $enregistrements = Enregistrement::offset($offset)
            ->limit($limit)
            ->orderBy('created_at', "DESC")
            ->get();
        return $enregistrements;
    }

    /*public function getAllEnregistrementsRecherche($page = 0, $information)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $enregistrements = Enregistrement::where('id', 'LIKE', '%' . $information . '%')
            ->orWhere('procedure', 'LIKE', '%' . $information . '%')
            ->orWhere('pour', 'LIKE', '%' . $information . '%')
            ->offset($offset)
            ->limit($limit)
            ->get();
        return $enregistrements;
    }*/
    public function getAllEnregistrementsByName($page = 0, $nomClient)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $enregistrements = Enregistrement::where('pour', $nomClient)->offset($offset)->limit($limit)->get();
        return $enregistrements;
    }

    /* public function getEnregistrementCourseNonFiniByName($page = 0, $nomClient)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $courses = Course::offset($offset)
            ->select('enregistrement_id', 'pour', 'procedure')
            ->join('enregistrements', 'courses.enregistrement_id', '=', 'enregistrements.id')
            ->where('fini', '=', '0')
            ->where('pour', '=', $nomClient)
            ->limit($limit)
            ->get();
        return $courses;
    }

    public function getEnregistrementCourseFiniByName($page = 0, $nomClient)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $courses = Course::offset($offset)
            ->select('enregistrement_id', 'pour', 'procedure')
            ->join('enregistrements', 'courses.enregistrement_id', '=', 'enregistrements.id')
            ->where('fini', '=', '1')
            ->where('pour', '=', $nomClient)
            ->limit($limit)
            ->get();
        return $courses;
    }

    public function verifEnregistrementByName($page = 0, $nomClient)
    {

        $getEnregistrementCourseNonFiniByName = $this->getEnregistrementCourseNonFiniByName($page, $nomClient);
        $getEnregistrementCourseFiniByName = $this->getEnregistrementCourseFiniByName($page, $nomClient);
        $getEnregistrementByName = $this->getAllEnregistrementsByName($page, $nomClient);
        $indice = 0;
        $retour = array();


        if (count($getEnregistrementCourseNonFiniByName) == 0 && count($getEnregistrementCourseFiniByName) > 0) {
            $retour[$indice]['enregistrement_id'] = $getEnregistrementCourseFiniByName[0]['enregistrement_id'];
            $retour[$indice]['pour'] = $getEnregistrementCourseFiniByName[0]['pour'];
            $retour[$indice]['procedure'] = $getEnregistrementCourseFiniByName[0]['procedure'];
            $retour[$indice]['fini'] = true;
        } elseif (count($getEnregistrementCourseNonFiniByName) > 0 && count($getEnregistrementCourseFiniByName) == 0) {
            $retour[$indice]['enregistrement_id'] = $getEnregistrementCourseNonFiniByName[0]['enregistrement_id'];
            $retour[$indice]['pour'] = $getEnregistrementCourseNonFiniByName[0]['pour'];
            $retour[$indice]['procedure'] = $getEnregistrementCourseNonFiniByName[0]['procedure'];
            $retour[$indice]['fini'] = false;
        } elseif (count($getEnregistrementCourseNonFiniByName) > 0 && count($getEnregistrementCourseFiniByName) > 0) {
            $retour[$indice]['enregistrement_id'] = $getEnregistrementCourseNonFiniByName[0]['enregistrement_id'];
            $retour[$indice]['pour'] = $getEnregistrementCourseNonFiniByName[0]['pour'];
            $retour[$indice]['procedure'] = $getEnregistrementCourseNonFiniByName[0]['procedure'];
            $retour[$indice]['fini'] = false;
        } elseif (count($getEnregistrementCourseNonFiniByName) == 0 && count($getEnregistrementCourseFiniByName) == 0 && count($getEnregistrementByName) > 0) {
            $retour[$indice]['enregistrement_id'] = $getEnregistrementByName[0]['id'];
            $retour[$indice]['pour'] = $getEnregistrementByName[0]['pour'];
            $retour[$indice]['procedure'] = $getEnregistrementByName[0]['procedure'];
            $retour[$indice]['fini'] = true;
        }
        return $retour;
    }



    public function getEnregistrementCourseNonFini($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $courses = Course::offset($offset)
            ->select('enregistrement_id')
            ->where('fini', '=', '0')
            ->groupBy('enregistrement_id')
            ->limit($limit)
            ->get();
        return $courses;
    }

    public function verificationCourseEnregistrement($page = 0)
    {
        $enregistrements = $this->getAllEnregistrements($page);
        $courses = $this->getEnregistrementCourseNonFini($page);
        $retour = array();

        $indice = 0;
        for ($ii = 0; $ii < count($courses); $ii++) {
            for ($i = 0; $i < count($enregistrements); $i++) {
                if ($courses[$ii]['enregistrement_id'] == $enregistrements[$i]['id']) {

                    $retour[$indice]['enregistrement_id'] = $enregistrements[$i]['id'];
                    $retour[$indice]['pour'] = $enregistrements[$i]['pour'];
                    $retour[$indice]['procedure'] = $enregistrements[$i]['procedure'];
                    $retour[$indice]['fini'] = false;
                    $indice++;
                    //$retour['fini']=$courses[$ii]['fini'];

                }
            }
        }
        for ($l = 0; $l < count($enregistrements); $l++) {
            $retour[$indice]['enregistrement_id'] = $enregistrements[$l]['id'];
            $retour[$indice]['pour'] = $enregistrements[$l]['pour'];
            $retour[$indice]['procedure'] = $enregistrements[$l]['procedure'];
            $retour[$indice]['fini'] = true;
            $indice++;
        }

        return $retour;
    }

    public function removeDoublonEnregistrementCourse($page = 0)
    {
        $verif = $this->verificationCourseEnregistrement($page);
        $indice = 0;
        $retour1 = array();

        foreach ($verif as $key => $table_el) {
            // dump($table_el);
            $retour1[] = $table_el['enregistrement_id'];
        }
        $remove_doublon[] = array_keys(array_unique($retour1));
        //dump(count(array_unique($retour1)));
        for ($i = 0; $i < count($remove_doublon); $i++) {
            for ($j = 0; $j < count(array_unique($retour1)); $j++) {
                $retour[$indice] = $verif[$remove_doublon[$i][$j]];
                $indice++;
            }
        }
        Log::info(count($retour));
        return $retour;
    } */


    public function getCalendrier($page = 0)
    {
        /* $enregistrementNonFinis = Course::where('fini', '0')
            ->select('enregistrement_id', 'pour', 'procedure', 'fini')
            ->join('enregistrements', 'courses.enregistrement_id', '=', 'enregistrements.id')
            ->orderBy('enregistrements.created_at', "DESC")
            ->groupBy('enregistrement_id')
            ->get(); */
        $calendrier = Agenda::orderBy('agendas.date_agenda', "desc")
            ->join('enregistrements', 'agendas.enregistrement_id', '=', 'enregistrements.id')
            ->distinct('enregistrement_id')
            ->select(['enregistrement_id', 'procedure', 'date_agenda'])
            ->get();
        /* foreach ($enregistrementNonFinis as $enregistrementNonFini) {
            if ($enregistrementNonFini->fini == '1') $enregistrementNonFini->fini = true;
            else if ($enregistrementNonFini->fini == '0') $enregistrementNonFini->fini = false;

            // recuperation de l'agenda
        } */
        return $calendrier;
    }
}
