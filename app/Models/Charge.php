<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    use HasFactory;

    public function typeCharge()
    {
        $this->hasOne('type_charge_id');
    }

    protected $fillable = [
        'id',
        'type_charge_id',
        'type_frequence_paiement_charge_id',
        'frequence_paiement',
        'montant',
        'motif',
        'remarque',
    ];
}
