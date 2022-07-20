<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\DB;

class AgendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Agenda::truncate();

        $faker = \Faker\Factory::create();

        $enregistrements = Enregistrement::all();

        foreach ($enregistrements as $enregistrement) {
            for ($i = 1; $i < 5; $i++) {
                DB::table("agendas")->insert([
                    'enregistrement_id' => $enregistrement->id,
                    'type_renvoi_id' => $faker->numberBetween(1, 3),
                    'motif' => 'motif',
                    'espace_conclusion' => "a",
                    'date_agenda' => "2022-08-30",
                    'salle' => "salle" . $i,
                ]);
            }
        }
    }
}
