<?php

namespace App\Http\Controllers\comptabiliteFrais;

use App\Http\Controllers\Controller;
use App\models\ComptabiliteFrais;
use App\Models\ComptabiliteHonoraire;
use Illuminate\Support\Facades\Log;

class ControllerListerComptabiliteFrais extends Controller
{
    public function getAllComptabiliteFrais($page = 0)
    {

        $offset = env('PAGINATION') * $page;
        $limit = $offset + env('PAGINATION');

        $comptabiliteFrais = ComptabiliteFrais::selectRaw('id, enregistrement_id, motif , -montant as montant  ,date_paiement, paye_par,recu_par, remarque,created_at,updated_at')
            ->offset($offset)
            ->limit($limit);

        $comptaHonoraires = ComptabiliteHonoraire::offset($offset)
            ->limit($limit);

        $comptaGenerale = $comptabiliteFrais->union($comptaHonoraires)->offset($offset)
            ->limit($limit)
            ->get();


        return $comptaGenerale;
    }
}
