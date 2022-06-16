<?php

namespace App\Http\Controllers\nature;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Nature;

class ControllerSelectNature extends Controller
{
    public function selectAll()
    {
        return Nature::all();
    }
}
