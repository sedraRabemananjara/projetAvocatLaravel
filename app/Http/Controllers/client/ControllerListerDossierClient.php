<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ControllerListerDossierClient extends Controller
{

    public function getAll($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $dossiers = Enregistrement::orderBy("created_at", "DESC")
            ->select(['id', 'procedure', 'pour'])
            ->offset($offset)
            ->limit($limit)
            ->get();
        return $dossiers;
    }

    public function rechercher($page, $information)
    {
        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');
        $dossiers = Enregistrement::where('id', 'LIKE', '%' . $information . '%')
            ->orWhere('procedure', 'LIKE', '%' . $information . '%')
            ->orWhere('pour', 'LIKE', '%' . $information . '%')
            ->offset($offset)
            ->limit($limit)
            ->select(['id', 'procedure', 'pour'])
            ->get();
        Log::info($dossiers);
        return $dossiers;
    }
}
