<?php

namespace App\Http\Controllers\comptabiliteHonoraire;

use App\Http\Controllers\Controller;
use App\Models\ComptabiliteHonoraire;

class ControllerListerComptabiliteHonoraires extends Controller
{
    public function getAllComptabiliteHonoraire($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = env('PAGINATION');

        $comtaFrais = ComptabiliteHonoraire::offset($offset)
            ->limit($limit)
            ->orderBy('created_at', 'desc')
            ->get();

        return $comtaFrais;
    }
}
