<?php

namespace App\Http\Controllers\fichierAgenda;

use App\Http\Controllers\Controller;
use App\Models\FichierAgenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ControllerSelectFichierAgenda extends Controller
{
    public function select($idAgenda)
    {
        $fichierAgenda = FichierAgenda::where('agenda_id', $idAgenda)
            ->get();

        if (count($fichierAgenda) == 0) abort(404, "Aucun fichier trouvé");
        $fichierAgenda = $fichierAgenda[0];

        $fichierBase64 = $fichierAgenda->fichier_base_64;

        $extension = explode('/', mime_content_type($fichierBase64))[1];
        if ($extension == "msword") $extension = "doc";

        $data = explode('base64,', $fichierBase64)[1];


        // Storage::disk("public")->put('fichier.pdf', base64_decode($data));
        Storage::disk("public")->put('agenda/' . $idAgenda . '/conclusion.' . $extension, base64_decode($data));
        return asset('storage/agenda/' . $idAgenda . '/conclusion.' . $extension);
    }
}
