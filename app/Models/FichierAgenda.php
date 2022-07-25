<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FichierAgenda extends Model
{
    use HasFactory;

    public function agenda()
    {
        return $this->belongsTo(Agenda::class);
    }

    protected $guarded = [];
}
