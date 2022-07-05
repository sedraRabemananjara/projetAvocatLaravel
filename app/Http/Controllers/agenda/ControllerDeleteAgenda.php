<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerDeleteAgenda extends Controller
{
    public function delete()
    {
        request()->validate([
            'id' => 'required',
        ]);

        return Agenda::where('id', request('id'))
            ->delete();
    }
}
