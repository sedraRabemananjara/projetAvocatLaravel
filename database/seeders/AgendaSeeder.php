<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Agenda;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
            $dateAgenda = Carbon::createFromTimeStamp($faker->dateTimeBetween('-1 month', '+2 month')->getTimestamp());
            for ($i = 1; $i < 5; $i++) {
                Agenda::create([
                    'enregistrement_id' => $enregistrement->id,
                    'type_renvoi_id' => $faker->numberBetween(1, 3),
                    'motif' => 'motif',
                    'espace_conclusion' => "a",
                    'date_agenda' => $dateAgenda->toDateTimeString(),
                    'salle' => "salle" . $i,
                ]);
                $dateAgenda->addDays($faker->numberBetween(20, 30));
            }
        }
    }
}
