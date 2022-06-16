<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function enregistrement()
    {
        return $this->belongsTo(Enregistrement::class);
    }


    protected $fillable = [
        'id',
        'enregistrement_id',
        'agenda_id',
        'TAF',
        'resultat',
        'responsable',
        'date_necessite',
        'fini',
    ];
}
