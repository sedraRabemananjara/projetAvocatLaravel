<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Database\Seeders\EnregistrementSeeder;
use App\Models\Enregistrement;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(5)->create();
        //\App\Models\Enregistrement::factory(100)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            // SectionJuridictionSeeder::class,
            // JuridictionSeeder::class,
            NatureSeeder::class,
            TypeRenvoiSeeder::class,
            TypeChargeSeeder::class,
            UserTableSeeder::class,
            JuridictionSeeder::class,
            SectionJuridictionSeeder::class,
            TypeFrequencePaiementChargeSeeder::class,
            EnregistrementSeeder::class,
            AgendaSeeder::class,
            CourseSeeder::class,
        ]);
    }
}
