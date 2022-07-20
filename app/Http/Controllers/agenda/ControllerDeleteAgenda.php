<?php

namespace App\Http\Controllers\agenda;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Agenda;

class ControllerDeleteAgenda extends Controller
{
    public function delete($idAgenda)
    {
        return Agenda::where('id', $idAgenda)
            ->delete();
    }
}
