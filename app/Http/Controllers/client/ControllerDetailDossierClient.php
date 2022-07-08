<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Agenda;
use App\Models\Enregistrement;
use Exception;
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

        $prochainAgenda = null;
        $dernierAgenda = null;
        try {
            $prochainAgenda = Agenda::where('enregistrement_id', $dossier->id)
                ->orderBy("created_at", "DESC")
                ->offset(0)
                ->limit(1)
                ->get()[0];
        } catch (Exception $ex) {
            $prochainAgenda = null;
        }
        try {
            $dernierAgenda = Agenda::where('enregistrement_id', $dossier->id)
                ->orderBy("created_at", "DESC")
                ->offset(1)
                ->limit(1)
                ->get()[0];
        } catch (Exception $ex) {
            $dernierAgenda = null;
        }

        $dossier->prochainAgenda = $prochainAgenda;
        $dossier->dernierAgenda = $dernierAgenda;

        return $dossier;
    }
}
