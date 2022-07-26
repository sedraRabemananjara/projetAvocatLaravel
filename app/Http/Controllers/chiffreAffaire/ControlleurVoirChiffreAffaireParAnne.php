<?php

namespace App\Http\Controllers\chiffreAffaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ViewVoirChiffreAffaireParAnne;

class ControlleurVoirChiffreAffaireParAnne extends Controller
{
    //
    public function getChiffreAffaireParAnne($annee)
    {

        $chiffre = ViewVoirChiffreAffaireParAnne::select("*")
            ->where('anne', $annee)
            ->get();

        return $chiffre;
    }
}
