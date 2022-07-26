<?php

namespace App\Http\Controllers\chiffreAffaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ViewVoirChiffreAffaire;

class ControlleurVoirChiffreAffaire extends Controller
{
    public function getChiffreAffaire()
    {

        $chiffre = ViewVoirChiffreAffaire::select("*")
            ->get();

        return $chiffre;
    }
}
