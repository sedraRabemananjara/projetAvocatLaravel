<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Http\Request;

class ControllerDetailDossierClient extends Controller
{
    public function get($id)
    {
        $dossier = Enregistrement::where('id', $id)
            ->with('sectionJuridiction')
            ->with('juridiction')
            ->with('nature')
            ->get()[0];

        // recuperer le dernier agenda et l'agenda prochain du client

        return $dossier;
    }
}
