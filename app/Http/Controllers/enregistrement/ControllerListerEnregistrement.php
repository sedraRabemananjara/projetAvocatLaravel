<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;
use Illuminate\Support\Facades\Auth;

class ControllerListerEnregistrement extends Controller
{
    public function getAllEnregistrements($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $enregistrements = Enregistrement::where('user_id', Auth::user()->id)->offset($offset)->limit($limit)->get();
        return $enregistrements;
    }
}
