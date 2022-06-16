<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrequencePaiement extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'id', 'building_name', 'building_information', 'building_image', 
    ];
}
