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

    public function nature()
    {
        return $this->belongsTo(Nature::class);
    }

    public function juridiction()
    {
        return $this->belongsTo(Juridiction::class);
    }

    public function sectionJuridiction()
    {
        return $this->belongsTo(SectionJuridiction::class);
    }


    protected $fillable = [
        'id',
        'pour',
        'contre',
        'nature_id',
        'juridiction_id',
        'procedure',
        'adresse_client',
        'telephone_client',
        'email_client',
        'telephone_interlocuteur',
        'email_interlocuteur',
        'user_id',
        'lieu',
        'section_juridiction_id',
    ];

    protected $hidden = ['user_id'];
}
