<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use App\Models\FichierAgenda;
use App\Models\Agenda;
use App\Models\Enregistrement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadFichier extends Controller
{
    public function getFileLink($idEnregistrement)
    {
        $enregistrement = Enregistrement::find($idEnregistrement);
        $agenda = Enregistrement::getDernierAgendaWithConclusion($idEnregistrement);
        if ($agenda == null) {
            abort(404, "Aucun agenda avec conclusion relié avec cet enregistrement");
        }

        $fichierAgenda = FichierAgenda::where('agenda_id', $agenda->id)
            ->get();
        $fichierAgenda = $fichierAgenda[0];

        $fichierBase64 = $fichierAgenda->fichier_base_64;

        $extension = explode('/', mime_content_type($fichierBase64))[1];
        if ($extension == "msword") $extension = "doc";

        $data = explode('base64,', $fichierBase64)[1];


        // Storage::disk("public")->put('fichier.pdf', base64_decode($data));
        Storage::disk("public")->put('enregistrement/' . $idEnregistrement . '/derniere_conclustion.' . $extension, base64_decode($data));
        return asset('storage/enregistrement/' . $idEnregistrement . '/derniere_conclustion.' . $extension);

        // return asset('storage/agenda_1/fichier.txt');
        // return Storage::download('public/fichier.pdf');

        // return $extension;
    }
}
