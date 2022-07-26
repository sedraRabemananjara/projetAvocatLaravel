<?php

namespace App\Http\Controllers\avocat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Avocat;
use Illuminate\Support\Facades\DB;

class ControllerUpdateAvocat extends Controller
{
    public function update($id)
    {
        request()->validate([
            'mdp' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'mailAvocat' => 'required',
            'addresseAvocat' => 'required',
            'contactAvocat' => 'required',
        ]);

        $avocat = DB::table('avocats')
            ->where('idAvocat', $id)
            ->update([
                'mdp' => request('mdp'),
                'nom' => request('nom'),
                'prenom' => request('prenom'),
                'mailAvocat' => request('mailAvocat'),
                'addresseAvocat' => request('addresseAvocat'),
                'contactAvocat' => request('contactAvocat'),
            ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
