<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    public function enregistrement()
    {
        $this->belongsTo(Enregistrement::class);
    }

    public function typeRenvoi()
    {
        $this->hasOne(TypeRenvoi::class);
    }

    protected $fillable = [
        'id', 'enregistrement_id', 'type_renvoi_id', 'motif', 'espace_conclusion', 'date_agenda', 'salle'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'date_agenda' => 'datetime',
    ];
}
