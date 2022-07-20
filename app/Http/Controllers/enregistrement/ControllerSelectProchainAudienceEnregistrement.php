<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;

class ControllerSelectProchainAudienceEnregistrement extends Controller
{
    public function select($idEnregistrement)
    {
        $prochainAgenda = Agenda::where('enregistrement_id', $idEnregistrement)
            ->orderBy("date_agenda", "desc")
            ->offset(0)
            ->limit(1)
            ->get();


        if (count($prochainAgenda) == 0) {
            abort(404, "Aucun agenda trouvé");
        }

        $prochainAgenda = $prochainAgenda[0];

        return $prochainAgenda->date_agenda;
    }
}
