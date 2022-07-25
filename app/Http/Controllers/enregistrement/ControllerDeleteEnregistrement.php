<?php

namespace App\Http\Controllers\enregistrement;

use App\Http\Controllers\Controller;
use App\models\Enregistrement;

class ControllerDeleteEnregistrement extends Controller
{
    public function delete($id)
    {
        return Enregistrement::where('id', $id)
            ->delete();
    }
}
