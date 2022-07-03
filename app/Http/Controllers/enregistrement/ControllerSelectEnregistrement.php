<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Http\Request;

class ControllerSelectEnregistrement extends Controller
{
    public function getEnregistrement($idEnregistrement)
    {
        return Enregistrement::where('id', $idEnregistrement)->get();
    }
}
