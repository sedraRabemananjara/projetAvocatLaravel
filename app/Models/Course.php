<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function enregistrement()
    {
        return $this->belongsTo(Enregistrement::class);
    }


    protected $fillable = [
        'id',
        'enregistrement_id',
        'agenda_id',
        'travaux_a_faire',
        'resultat',
        'responsable',
        'date_necessite',
        'fini',
    ];
}
