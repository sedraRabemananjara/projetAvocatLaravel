<?php

namespace App\Http\Controllers\sectionJuridiction;

use App\Http\Controllers\Controller;
use App\Models\SectionJuridiction;
use Illuminate\Http\Request;

class ControllerSelectSectionJuridiction extends Controller
{
    public function selectAll()
    {
        return SectionJuridiction::all();
    }
}
