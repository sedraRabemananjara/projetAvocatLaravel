<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EnregistrementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Enregistrement::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table("enregistrements")->insert([
                'user_id' => 1,
                'pour' => $faker->name(),
                'contre' => "Entite" . $i,
                'nature_id' => $faker->numberBetween(1, 5),
                'juridiction_id' => $faker->numberBetween(1, 5),
                'section_juridiction_id' => $faker->numberBetween(1, 3),
                'procedure' => "PROCEDURE" . $i,
                'lieu' => "Siege Anosy",
                'adresse_client' => "lot cli" . $i,
                'telephone_client' => "090234409" . $i,
                'email_client' => "cl1@email.com" . $i,
                'email_interlocuteur' => "interloc1@email.com",
                'telephone_interlocuteur' => "00012122",
                'date_delais_paiement' => "30/06/2022",
                'montant_honoraire' => 10000,
            ]);
        }

        for ($i = 51; $i < 10; $i++) {
            DB::table("enregistrements")->insert([
                'user_id' => 2,
                'pour' => $faker->name(),
                'contre' => "Entite" . $i,
                'nature_id' => $faker->numberBetween(1, 5),
                'juridiction_id' => $faker->numberBetween(1, 5),
                'section_juridiction_id' => $faker->numberBetween(1, 3),
                'procedure' => "PROCEDURE" . $i,
                'lieu' => "Siege Anosy",
                'adresse_client' => "lot cli" . $i,
                'telephone_client' => "090234409" . $i,
                'email_client' => "cl1@email.com" . $i,
                'email_interlocuteur' => "interloc1@email.com",
                'telephone_interlocuteur' => "00012122",
                'date_delais_paiement' => "20/06/2022",
                'montant_honoraire' => 11000,
            ]);
        }

        for ($i = 102; $i < 10; $i++) {
            DB::table("enregistrements")->insert([
                'user_id' => 3,
                'pour' => $faker->name(),
                'contre' => "Entite" . $i,
                'nature_id' => $faker->numberBetween(1, 5),
                'juridiction_id' => $faker->numberBetween(1, 5),
                'section_juridiction_id' => $faker->numberBetween(1, 3),
                'procedure' => "PROCEDURE" . $i,
                'lieu' => "Siege Anosy",
                'adresse_client' => "lot cli" . $i,
                'telephone_client' => "090234409" . $i,
                'email_client' => "cl1@email.com" . $i,
                'email_interlocuteur' => "interloc1@email.com",
                'telephone_interlocuteur' => "00012122",
                'date_delais_paiement' => "20/06/2022",
                'montant_honoraire' => 11300,
            ]);
        }
        for ($i = 153; $i < 10; $i++) {
            DB::table("enregistrements")->insert([
                'user_id' => 4,
                'pour' => $faker->name(),
                'contre' => "Entite" . $i,
                'nature_id' => $faker->numberBetween(1, 5),
                'juridiction_id' => $faker->numberBetween(1, 5),
                'section_juridiction_id' => $faker->numberBetween(1, 3),
                'procedure' => "PROCEDURE" . $i,
                'lieu' => "Siege Anosy",
                'adresse_client' => "lot cli" . $i,
                'telephone_client' => "090234409" . $i,
                'email_client' => "cl1@email.com" . $i,
                'email_interlocuteur' => "interloc1@email.com",
                'telephone_interlocuteur' => "00012122",
                'date_delais_paiement' => "20/06/2022",
                'montant_honoraire' => 11000,
            ]);
        }
        for ($i = 204; $i < 10; $i++) {
            DB::table("enregistrements")->insert([
                'user_id' => 5,
                'pour' => $faker->name(),
                'contre' => "Entite" . $i,
                'nature_id' => $faker->numberBetween(1, 5),
                'juridiction_id' => $faker->numberBetween(1, 5),
                'section_juridiction_id' => $faker->numberBetween(1, 3),
                'procedure' => "PROCEDURE" . $i,
                'lieu' => "Siege Anosy",
                'adresse_client' => "lot cli" . $i,
                'telephone_client' => "090234409" . $i,
                'email_client' => "cl1@email.com" . $i,
                'email_interlocuteur' => "interloc1@email.com",
                'telephone_interlocuteur' => "00012122",
                'date_delais_paiement' => "20/06/2022",
                'montant_honoraire' => 11000,
            ]);
        }
    }
}
