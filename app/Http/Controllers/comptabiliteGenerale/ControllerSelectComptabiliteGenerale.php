<?php

namespace App\Http\Controllers\comptabiliteGenerale;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ComptabiliteFrais;
use App\Models\ComptabiliteHonoraire;
use Illuminate\Support\Facades\Log;

class ControllerSelectComptabiliteGenerale extends Controller
{
    public function select($page = 0)
    {
        $offset = env('PAGINATION') * $page;
        $limit = env('PAGINATION');

        $comptabiliteFrais = ComptabiliteFrais::selectRaw('id, enregistrement_id, motif , -montant as montant  ,date_paiement, paye_par,recu_par, remarque,created_at,updated_at');

        $comptaHonoraires = ComptabiliteHonoraire::select('*');

        $comptaGenerale = $comptabiliteFrais->union($comptaHonoraires)->offset($offset)
            ->limit($limit)
            ->orderBy('created_at', 'desc')
            ->get();

        // Log::info(count($comptaGenerale));

        return $comptaGenerale;
    }
}
