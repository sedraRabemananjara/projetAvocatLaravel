<?php

namespace Database\Seeders;

use App\Models\ComptabiliteHonoraire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enregistrement;
use Illuminate\Support\Facades\DB;

class ComptabiliteHonoraireSeeder extends Seeder
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
            for ($i = 1; $i < 3; $i++) {
                ComptabiliteHonoraire::create([
                    'enregistrement_id' => $enregistrement->id,
                    'motif' => "motif",
                    'montant' => 10000,
                    'paye_par' => $faker->name(),
                    'recu_par' => $faker->name(),
                ]);
            }
        }
    }
}
