<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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
        'montant_honoraire',
        'date_delais_paiement',
        'envoi_mail_automatique',
    ];

    protected $hidden = ['user_id'];

    public static function getDernierAgendaWithConclusion($idEnregistrement)
    {
        // $query = "select * from agendas where exists (select agenda_id from fichier_agendas where agendas.id=fichier_agendas.agenda_id) and enregistrement_id=%d order by created_at DESC offset 0 limit 1";
        // $query = sprintf($query, $idEnregistrement);
        // $dernierAgendaWithConclusion = DB::select(DB::raw($query));
        $dernierAgendaWithConclusion = Agenda::where('enregistrement_id', $idEnregistrement)
            ->whereExists(function ($query) {
                $query->select('agenda_id')
                    ->from('fichier_agendas')
                    ->whereRaw('agendas.id = fichier_agendas.agenda_id');
            })
            ->offset(0)
            ->limit(1)
            ->orderBy('created_at', 'desc')
            ->get();
        if (count($dernierAgendaWithConclusion) > 0) $dernierAgendaWithConclusion = $dernierAgendaWithConclusion[0];
        else $dernierAgendaWithConclusion = null;
        return $dernierAgendaWithConclusion;
    }
}
