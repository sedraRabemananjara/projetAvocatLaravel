<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Agenda;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Agenda::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 1; $i < 10; $i++) {
            DB::table("agendas")->insert([
                'enregistrement_id' => $i,
                'type_renvoi_id' => $faker->numberBetween(1, 3),
                'motif' => $faker->name(),
                'espace_conclusion' => "a reporter a la semaine suivante",
                'date_agenda' => "30/06/2022",
                'salle' => "salle" . $i,
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table("agendas")->insert([
                'enregistrement_id' => $i,
                'type_renvoi_id' => $faker->numberBetween(1, 3),
                'motif' => 'appel provenant du tribunal',
                'espace_conclusion' => "le client doit preparer des preuves de defenses bien fiable",
                'date_agenda' => "19/06/2022",
                'salle' => "salle" . $i,
            ]);
        }
        for ($i = 1; $i < 10; $i++) {
            DB::table("agendas")->insert([
                'enregistrement_id' => $i,
                'type_renvoi_id' => $faker->numberBetween(1, 3),
                'motif' => 'rencontre entre client et avocat',
                'espace_conclusion' => "le client etre en contact avec son avocat",
                'date_agenda' => "01/07/2022",
                'salle' => "salle" . $i,
            ]);
        }
        for ($i = 1; $i < 10; $i++) {
            DB::table("agendas")->insert([
                'enregistrement_id' => $i,
                'type_renvoi_id' => $faker->numberBetween(1, 3),
                'motif' => 'session de justice',
                'espace_conclusion' => "date finale de cette affaire avec decision du juri",
                'date_agenda' => "07/07/2022",
                'salle' => "salle" . $i,
            ]);
        }
    }
}
