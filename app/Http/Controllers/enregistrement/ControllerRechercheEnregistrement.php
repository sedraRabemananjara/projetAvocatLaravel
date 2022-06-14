<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Http\Request;

class ControllerRechercheEnregistrement extends Controller
{
    public function rechercher($information)
    {
        $enregistrement = Enregistrement::where('id', 'LIKE', '%' . $information . '%')
            ->orWhere('numerodossier', 'LIKE', '%' . $information . '%')
            ->orWhere('pour', 'LIKE', '%' . $information . '%')
            ->get();
        return $enregistrement;
    }
}
