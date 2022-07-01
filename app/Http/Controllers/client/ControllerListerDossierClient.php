<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Http\Request;

class ControllerListerDossierClient extends Controller
{

    public function getAll()
    {
        $dossiers = Enregistrement::orderBy("created_at")
            ->select(['id', 'procedure', 'pour'])
            ->get();
        return $dossiers;
    }
}
