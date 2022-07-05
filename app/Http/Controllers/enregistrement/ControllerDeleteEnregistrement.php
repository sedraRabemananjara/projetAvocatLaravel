<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\models\Enregistrement;

class ControllerDeleteEnregistrement extends Controller
{
    public function delete()
    {
        request()->validate([
            'id' => 'required',
        ]);

        return Enregistrement::where('id', request('id'))
            ->delete();
    }
}
