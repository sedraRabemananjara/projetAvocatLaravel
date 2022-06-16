<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function enregistrement()
    {
        $this->belongsTo(Enregistrement::class);
    }

    protected $fillable = [
        'id', 'building_name', 'building_information', 'building_image',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date' => 'datetime',
    ];
}
