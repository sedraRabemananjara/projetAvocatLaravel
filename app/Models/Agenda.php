<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Agenda extends Model
{
    use HasFactory;

    public function fichierAgenda()
    {
        return $this->hasOne(FichierAgenda::class);
    }

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

    public static function getLienFichier($idAgenda)
    {

        $fichierAgenda = FichierAgenda::where('agenda_id', $idAgenda)
            ->get();

        if (count($fichierAgenda) == 1) {
            $fichierAgenda = $fichierAgenda[0];

            $fichierBase64 = $fichierAgenda->fichier_base_64;

            $extension = explode('/', mime_content_type($fichierBase64))[1];
            if ($extension == "msword") $extension = "doc";

            $data = explode('base64,', $fichierBase64)[1];


            // Storage::disk("public")->put('fichier.pdf', base64_decode($data));
            Storage::disk("public")->put('agenda/' . $idAgenda . '/espaceConclusion.' . $extension, base64_decode($data));
            return asset('storage/agenda/' . $idAgenda . '/espaceConclusion.' . $extension);
        }
        return null;
    }
}
