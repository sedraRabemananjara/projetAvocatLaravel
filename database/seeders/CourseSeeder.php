<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\DB;
use App\Models\Enregistrement;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Course::truncate();

        $faker = \Faker\Factory::create();

        $enregistrements = Enregistrement::all();

        foreach ($enregistrements as $enregistrement) {
            for ($i = 1; $i < 5; $i++) {
                DB::table("courses")->insert([
                    'enregistrement_id' => $enregistrement->id,
                    'travaux_a_faire' => 'mila maka cetificat de residence',
                    'date_necessite' => "20/06/2022",
                    'resultat' => 'resoudre le probleme entre client et entite',
                    'responsable' => $faker->name(),
                    'date_ordre' => "2022-08-30",
                    'fini' => $faker->randomElement([true, false]),
                ]);
            }
        }
    }
}
