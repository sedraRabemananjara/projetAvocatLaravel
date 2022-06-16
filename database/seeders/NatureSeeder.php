<?php

namespace Database\Seeders;

use App\Models\Nature;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Nature::create([
            'nom' => 'Penale'
        ]);
        Nature::create([
            'nom' => 'Civile'
        ]);
        Nature::create([
            'nom' => 'Commerciale'
        ]);
        Nature::create([
            'nom' => 'Sociale'
        ]);
        Nature::create([
            'nom' => 'Administratif'
        ]);
    }
}
