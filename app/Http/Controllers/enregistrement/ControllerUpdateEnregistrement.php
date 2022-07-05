<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\Models\Enregistrement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class ControllerUpdateEnregistrement extends Controller
{

    public function findById($id)
    {
        return view('modifierEnregistrement', compact('enregistrement'));
    }

    public function update(Request $request)
    {
        $enregistrement = new Enregistrement();
        $enregistrement->exists = true;
        $enregistrement->id = request('idEnregistrement');
        $enregistrement->user_id = Auth::user()->id;
        $enregistrement->pour = request('pour');
        $enregistrement->contre = request('contre');
        $enregistrement->lieu = request('lieu');
        $enregistrement->nature_id = request('nature');
        $enregistrement->juridiction_id = request('juridiction');
        $enregistrement->section_juridiction_id = request('sectionJuridiction');
        $enregistrement->procedure = request('procedure');
        $enregistrement->adresse_client = request('adresseClient');
        $enregistrement->telephone_client = request('telephoneClient');
        $enregistrement->email_client = request('emailClient');
        $enregistrement->telephone_interlocuteur = request('telephoneInterloc');
        $enregistrement->email_interlocuteur = request('emailInterloc');

        if (Auth::user()->est_admin) {
            $enregistrement->montant_honoraire = request('montantHonoraire');
        }

        return $enregistrement->save();
    }
}
