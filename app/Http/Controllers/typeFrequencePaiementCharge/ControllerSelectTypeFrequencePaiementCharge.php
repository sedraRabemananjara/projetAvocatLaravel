<?php

namespace App\Http\Controllers\typeFrequencePaiementCharge;

use App\Http\Controllers\Controller;
use App\Models\TypeFrequencePaiementCharge;
use Illuminate\Http\Request;

class ControllerSelectTypeFrequencePaiementCharge extends Controller
{
    public function selectAll()
    {
        return TypeFrequencePaiementCharge::all();
    }
}
