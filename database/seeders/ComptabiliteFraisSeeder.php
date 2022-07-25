<?php

namespace Database\Seeders;

use App\Models\ComptabiliteFrais;
use App\Models\Enregistrement;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ComptabiliteFraisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $enregistrements = Enregistrement::all();
        $faker = \Faker\Factory::create();

        foreach ($enregistrements as $enregistrement) {
            $createdAt = Carbon::createFromTimeStamp($faker->dateTimeBetween('-10 day', '-1 day')->getTimestamp());
            for ($i = 1; $i < 3; $i++) {
                ComptabiliteFrais::create([
                    'enregistrement_id' => $enregistrement->id,
                    'motif' => "motif",
                    'montant' => 10000,
                    'paye_par' => $faker->name(),
                    'recu_par' => $faker->name(),
                    'created_at' => $createdAt,
                ]);
            }
        }
    }
}
