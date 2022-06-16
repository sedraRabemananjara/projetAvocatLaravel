<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Enregistrement;
use Illuminate\Support\Facades\DB;

class ControllerUpdateEnregistrement extends Controller
{
    
    public function update($id)
    {
        request()->validate([
            'pour' => 'required',
            'contre' => 'required',
            'juridiction' => 'required',
            'numerodossier' => 'required',
            'addresse' => 'required',
            'contact' => 'required',
            'email' => 'required',
        ]);

        $avocat = DB::table('enregistrements')
                        ->where('id', $id)
                        ->update([
                            'pour' => request('pour'),
                            'contre' => request('contre'),
                            'juridiction' => request('juridiction'),
                            'numerodossier' => request('numerodossier'),
                            'addresse' => request('addresse'),
                            'contact' => request('contact'),
                            'email' => request('email'),
                        ]);

        //return redirect()->route('modifier-echeance', ['id' => $id])->with('succes', 'Enregistrement mis à jour');

    }
   
   
}
