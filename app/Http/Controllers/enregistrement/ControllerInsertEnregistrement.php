<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;
use Illuminate\Support\Facades\Auth;

class ControllerInsertEnregistrement extends Controller
{
    public function insert(Request $request)
    {
        request()->validate([
            "pour" => "required",
            "contre" => "required",
            "nature" => "required",
            "juridiction" => "required",
            "numerodossier" => "required",
        ]);

        $enregistrement = new enregistrement();
        $enregistrement->pour = $request->input('pour');
        $enregistrement->contre = $request->input('contre');
        $enregistrement->nature = $request->input('nature');
        $enregistrement->juridiction = $request->input('juridiction');
        $enregistrement->numerodossier = $request->input('numerodossier');
        $enregistrement->adresse = $request->input('adresse');
        $enregistrement->telephone = $request->input('telephone');
        $enregistrement->email = $request->input('email');
        $enregistrement->idUser = Auth::user()->id;

        return $enregistrement->save();
    }
}
