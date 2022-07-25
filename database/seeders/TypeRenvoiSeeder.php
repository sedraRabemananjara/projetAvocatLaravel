<?php

namespace Database\Seeders;

use App\Models\TypeRenvoi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeRenvoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TypeRenvoi::create([
            'type' => 'Simple',
            'degre' => 1,
        ]);
        TypeRenvoi::create([
            'type' => 'Ferme',
            'degre' => 2,
        ]);
        TypeRenvoi::create([
            'type' => 'Super ferme',
            'degre' => 3,
        ]);
    }
}
