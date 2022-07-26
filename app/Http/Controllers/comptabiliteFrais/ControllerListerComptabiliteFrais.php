<?php

namespace App\Http\Controllers\comptabiliteFrais;

use App\Http\Controllers\Controller;
use App\Models\ComptabiliteFrais;

class ControllerListerComptabiliteFrais extends Controller
{
    public function getAllComptabiliteFrais($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = env('PAGINATION');

        $comptaFrais = ComptabiliteFrais::offset($offset)
            ->limit($limit)
            ->orderBy('created_at', 'desc')
            ->get();

        return $comptaFrais;
    }
}
