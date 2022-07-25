<?php

namespace Database\Seeders;

use App\Models\Juridiction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JuridictionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Juridiction::create([
            'nom' => 'CIV',
        ]);
        Juridiction::create([
            'nom' => 'SOC',
        ]);
        Juridiction::create([
            'nom' => 'COM',
        ]);
        Juridiction::create([
            'nom' => 'COR',
        ]);
        Juridiction::create([
            'nom' => 'CRIM',
        ]);
        Juridiction::create([
            'nom' => 'PAC',
        ]);
    }
}
