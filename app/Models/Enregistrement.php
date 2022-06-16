<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enregistrement extends Model
{
    use HasFactory;

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }


    protected $fillable = [
        'id', 'building_name', 'building_information', 'building_image', 'pour', 'contre', 'nature', 'juridiction', 'numerodossier', 'adresse', 'telephone', 'email'
    ];

    protected $hidden = ['user_id'];
}
