<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCharge extends Model
{
    use HasFactory;

    public function typeCharge()
    {
        $this->hasOne('type_charge_id');
    }

    protected $fillable = [
        'id',
        'type',
    ];
}
