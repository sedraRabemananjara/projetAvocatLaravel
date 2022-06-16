<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRenvoi extends Model
{
    use HasFactory;

    public function agenda()
    {
        $this->hasMany(Agenda::class);
    }

    protected $fillable = [
        'id', 'type', 'degre'
    ];
}
