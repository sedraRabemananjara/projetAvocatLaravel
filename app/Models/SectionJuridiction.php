<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionJuridiction extends Model
{
    use HasFactory;

    public function enregistrements()
    {
        $this->hasMany(Enregistrement::class);
    }

    protected $fillable = [
        'id', 'section'
    ];
}
