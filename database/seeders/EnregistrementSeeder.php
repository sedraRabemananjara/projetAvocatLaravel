<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Enregistrement;
use App\Models\Juridiction;
use App\Models\Nature;
use App\Models\SectionJuridiction;
use Illuminate\Support\Facades\DB;

class EnregistrementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Enregistrement::truncate();

        $faker = \Faker\Factory::create();

        $natureCount = Nature::all()->count();
        $juridictionCount = Juridiction::all()->count();
        $sectionJuridictionCount = SectionJuridiction::all()->count();

        $procedure = 1;

        for ($i = 0; $i < 5; $i++) {
            for ($j = 0; $j < 5; $j++) {
                DB::table("enregistrements")->insert([
                    'user_id' => $i,
                    'pour' => $faker->name(),
                    'contre' => $faker->name(),
                    'nature_id' => $faker->numberBetween(1, $natureCount),
                    'juridiction_id' => $faker->numberBetween(1, $juridictionCount),
                    'section_juridiction_id' => $faker->numberBetween(1, $sectionJuridictionCount),
                    'procedure' => $procedure,
                    'lieu' => $faker->country(),
                    'adresse_client' => "lot cli" . $procedure,
                    'telephone_client' => $faker->phoneNumber(),
                    'email_client' => $faker->email(),
                    'email_interlocuteur' => $faker->email(),
                    'telephone_interlocuteur' => $faker->phoneNumber(),
                    'date_delais_paiement' => "2022-08-30",
                    'montant_honoraire' => 10000,
                ]);
                $procedure++;
            }
        }
    }
}
