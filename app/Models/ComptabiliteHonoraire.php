<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComptabiliteHonoraire extends Model
{
    use HasFactory;

    public function enregistrement()
    {
        $this->belongsTo(Enregistrement::class);
    }

    protected $fillable = [
        'id',
        'enregistrement_id',
        'motif',
        'montant',
        'date_paiement',
        'paye_par',
        'recu_par',
        'remarque',
    ];

    protected $casts = [
        'date_paiement' => 'datetime',
    ];
}
