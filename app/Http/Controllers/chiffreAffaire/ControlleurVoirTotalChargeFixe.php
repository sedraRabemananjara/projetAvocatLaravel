<?php

namespace App\Http\Controllers\chiffreAffaire;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ViewAvoirChargeFixe;

class ControlleurVoirTotalChargeFixe extends Controller
{
    public function getChargeFixe(){
      
        $charge = ViewAvoirChargeFixe::select("*")
                    ->get();
                        
        return $charge;
    
    }

}
