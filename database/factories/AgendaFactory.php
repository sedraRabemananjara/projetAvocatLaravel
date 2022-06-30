<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Agenda>
 */
class AgendaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        for ($i = 1; $i < 251; $i++) {
        return [
            
            'enregistrement_id'=> $i, 
            'type_renvoi_id'=>$this->faker->numberBetween( 1, 3), 
            'motif' => $this->faker->name(),
            'espace_conclusion'=> "a reporter a la semaine suivante",
            'date_agenda'=>"30/06/2022",
            'salle'=>"salle".$i,
        
        ];
    }
    }
}
