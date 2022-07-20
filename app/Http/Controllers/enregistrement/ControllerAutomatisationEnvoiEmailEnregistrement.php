<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Http\Request;

class ControllerAutomatisationEnvoiEmailEnregistrement extends Controller
{
    public function activer()
    {
        request()->validate([
            'id' => 'required',
        ]);

        return Enregistrement::where('id', request('id'))
            ->update([
                'envoi_mail_automatique' => 1,
            ]);
    }

    public function desactiver()
    {
        request()->validate([
            'id' => 'required',
        ]);

        return Enregistrement::where('id', request('id'))
            ->update([
                'envoi_mail_automatique' => 0,
            ]);
    }
}
