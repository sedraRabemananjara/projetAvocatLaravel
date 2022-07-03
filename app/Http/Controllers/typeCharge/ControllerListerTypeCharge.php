<?php

namespace App\Http\Controllers\typeCharge;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TypeCharge;

class ControllerListerTypeCharge extends Controller
{
    public function getAllTypeCharge()
    {
        return TypeCharge::all();
    }
}
