<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\TypeCharge;

class TypeChargeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeCharge::create([
            'type' => 'loyer',
        ]);
        TypeCharge::create([
            'type' => 'entretient',
        ]);
        TypeCharge::create([
            'type' => 'divers',
        ]);
    }
}
