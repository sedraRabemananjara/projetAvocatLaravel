<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SectionJuridiction;

class SectionJuridictionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SectionJuridiction::create([
            'section' => 'TPI',
        ]);
        SectionJuridiction::create([
            'section' => 'CASS',
        ]);
        SectionJuridiction::create([
            'section' => 'CAX',
        ]);
    }
}
