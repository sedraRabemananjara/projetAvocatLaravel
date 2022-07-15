<?php

namespace Database\Seeders;

use App\Models\TypeFrequencePaiementCharge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeFrequencePaiementChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeFrequencePaiementCharge::create([
            'frequence' => 'jour',
        ]);
        TypeFrequencePaiementCharge::create([
            'frequence' => 'semaine',
        ]);
        TypeFrequencePaiementCharge::create([
            'frequence' => 'mois',
        ]);
        TypeFrequencePaiementCharge::create([
            'frequence' => 'annee',
        ]);
    }
}
