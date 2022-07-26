<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\FichierAgenda;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use App\Events\AgendaCreatedEvent;
use App\Models\Enregistrement;

class ControllerUpdateAgenda extends Controller
{

    public function update()
    {
        request()->validate([
            'id' => 'required',
            'idEnregistrement' => 'required',
            'motif' => 'required',
            // 'espaceConclusion' => 'required',
            'dateAgenda' => 'required',
            'typeRenvoi' => 'required',
        ]);

        DB::transaction(function () {
            DB::table('agendas')
                ->where('id', request('id'))
                ->update([
                    'enregistrement_id' => request('idEnregistrement'),
                    'type_renvoi_id' => request('typeRenvoi'),
                    'motif' => request('motif'),
                    // 'espace_conclusion' => request('espaceConclusion'),
                    'date_agenda' => request('dateAgenda'),
                    'salle' => request('salle'),
                ]);
            // fichier
            if (request('fichierBase64') != null || request('fichierBase64') != "") {
                // si il y a déja un fichier
                if (FichierAgenda::where('agenda_id', request("id"))->exists()) {
                    DB::table('fichier_agendas')
                        ->where('agenda_id', request('id'))
                        ->update([
                            "fichier_base_64" => request('fichierBase64'),
                        ]);
                } else {
                    FichierAgenda::create([
                        "agenda_id" => request("id"),
                        "fichier_base_64" => request('fichierBase64'),
                    ]);
                }
            }

            $agenda = Agenda::find(request('id'));
            $enregistrement = Enregistrement::find($agenda->enregistrement_id);

            event(new AgendaCreatedEvent($agenda, $enregistrement));

            return 1;
        });

        return 0;
    }
}
