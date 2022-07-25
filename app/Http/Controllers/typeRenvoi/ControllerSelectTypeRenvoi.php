<?php

namespace App\Http\Controllers\typeRenvoi;

use App\Http\Controllers\Controller;
use App\Models\TypeRenvoi;
use Illuminate\Http\Request;

class ControllerSelectTypeRenvoi extends Controller
{
    public function selectAll()
    {
        return TypeRenvoi::all();
    }
}
