<?php

namespace App\Http\Controllers\juridiction;

use App\Http\Controllers\Controller;
use App\Models\Juridiction;
use Illuminate\Http\Request;

class ControllerSelectJuridiction extends Controller
{

    public function selectAll()
    {
        return Juridiction::orderBy('nom', 'asc')->get();
    }
}
