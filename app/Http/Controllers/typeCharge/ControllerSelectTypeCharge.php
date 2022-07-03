<?php

namespace App\Http\Controllers\typeCharge;

use App\Http\Controllers\Controller;
use App\Models\TypeCharge;
use Illuminate\Http\Request;

class ControllerSelectTypeCharge extends Controller
{
    public function selectAll()
    {
        return TypeCharge::all();
    }
}
