<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\Auth;

class ControllerImportEnregistrement extends Controller
{
    public function import()
    {
        request()->validate([
            "id" => "required",
            "pour" => "required",
            "contre" => "required",
            "nature" => "required",
            "juridiction" => "required",
            "procedure" => "required",
            "lieu" => "required",
        ]);


        // controle du regex du procedure
        /* $pregProcedure = preg_match("/[0-9]{0,} *\/ *[0-9]{2,2}/", request("procedure"));
        if ($pregProcedure === 0) {
            $error = \Illuminate\Validation\ValidationException::withMessages([
                'procedure' => ['validation.regex'],
            ]);
            throw $error;
        } */


        return Enregistrement::create([
            "id" => request("id"),
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
    }
}
