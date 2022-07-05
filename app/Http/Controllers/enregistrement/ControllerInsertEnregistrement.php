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
            "procedure" => "required",
            "sectionJuridiction" => "required",
            "lieu" => "required",
        ]);


        // controle du regex du procedure
        $pregProcedure = preg_match("/[0-9]{0,} *\/ *[0-9]{2,2}/", request("procedure"));
        if ($pregProcedure === 0) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'procedure' => ['validation.regex'],
            ]);
            throw $error;
        }


        return Enregistrement::create([
            "user_id" => Auth::user()->id,
            "lieu" => request("lieu"),
            "pour" => request("pour"),
            "contre" => request("contre"),
            "nature_id" => request("nature"),
            "juridiction_id" => request("juridiction"),
            "section_juridiction_id" => request("sectionJuridiction"),
            "procedure" => request("procedure"),
            "adresse_client" => request("adresseClient"),
            "telephone_client" => request("telephoneClient"),
            "email_client" => request("emailClient"),
            "email_interlocuteur" => request("emailInterloc"),
            "telephone_interlocuteur" => request("telephoneInterloc"),
            "date_delais_paiement" => request("dateDelaisPaiement"),
        ]);

        /*$enregistrement = new enregistrement();
        $enregistrement->pour = $request->input('pour');
        $enregistrement->contre = $request->input('contre');
        $enregistrement->nature_id = $request->input('nature');
        $enregistrement->juridiction_id = $request->input('juridiction');
        $enregistrement->section_juridiction_id = $request->input('sectionJuridiction');
        $enregistrement->procedure = $request->input('procedure');
        $enregistrement->adresse_client = $request->input('adresseClient');
        $enregistrement->telephone_client = $request->input('telephoneClient');
        $enregistrement->email_client = $request->input('emailClient');
        $enregistrement->adresse_interloc = $request->input('adresseInterloc');
        $enregistrement->telephone_interloc = $request->input('telephoneInterloc');
        $enregistrement->email_interloc = $request->input('emailInterloc');
        $enregistrement->user_id = Auth::user()->id;

        return $enregistrement->save();*/
    }
}
