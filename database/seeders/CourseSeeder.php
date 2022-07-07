<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Course::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 1; $i < 10; $i++) {
            DB::table("courses")->insert([
                'enregistrement_id' => $i,
                'travaux_a_faire' => 'mila maka cetificat de residence',
                'date_necessite' => "20/06/2022",
                'resultat' => 'resoudre le probleme entre client et entite',
                'responsable' => $faker->name(),
                'date_ordre' => "29/06/2022",
                'fini' => $faker->randomElement(["true", "false"]),
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table("courses")->insert([
                'enregistrement_id' => $i,
                'travaux_a_faire' => 'mila certification legales ana tany',
                'date_necessite' => "10/07/2022",
                'resultat' => 'ahafahana mahazo aingana ny droit',
                'responsable' => $faker->name(),
                'date_ordre' => "20/07/2022",
                'fini' => $faker->randomElement(["true", "false"]),
            ]);
        }

        for ($i = 1; $i < 10; $i++) {
            DB::table("courses")->insert([
                'enregistrement_id' => $i,
                'travaux_a_faire' => 'mila maka passeport',
                'date_necessite' => "22/06/2022",
                'resultat' => 'ahafahana mahazo famelana',
                'responsable' => $faker->name(),
                'date_ordre' => "30/06/2022",
                'fini' => $faker->randomElement(["true", "false"]),
            ]);
        }
        for ($i = 1; $i < 10; $i++) {
            DB::table("courses")->insert([
                'enregistrement_id' => $i,
                'travaux_a_faire' => 'mila mifandamina aigana miaraka aminy avocat',
                'date_necessite' => "20/06/2022",
                'resultat' => 'resoudre le probleme rapide',
                'responsable' => $faker->name(),
                'date_ordre' => "29/06/2022",
                'fini' => $faker->randomElement(["true", "false"]),
            ]);
        }
    }
}
