<?php

namespace App\Http\Controllers\etat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Etat;
use Illuminate\Support\Facades\DB;

class ControllerUpdateEtat extends Controller
{
    public function update($id)
    {
        request()->validate([
            'idEnregistrement' => 'required',
        ]);

        $Etat = DB::table('etats')
            ->where('idEtat', $id)
            ->update([
                'idEnregistrement' => request('idEnregistrement'),
            ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
}
