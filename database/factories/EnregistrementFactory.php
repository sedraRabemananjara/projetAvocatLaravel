<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enregistrement>
 */
class EnregistrementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        
        return [
            'user_id'=> 1, 
            'pour' => $this->faker->name(),
            'contre' =>$this->faker->name(),
            'nature_id'=>$this->faker->numberBetween(1, 5),
            'juridition_id'=>$this->faker->numberBetween(1, 5),
            'section_juridiction_id'=>$this->faker->numberBetween(1, 3), 
            'procedure'=>"PROCEDURE".$this->faker= 001, 
            'lieu'=>$this->faker->address,
            'adresse_client'=>$this->faker->address, 
            'telephone_client' => $this->faker->phoneNumber,
            'email_client' => $this->faker->safeEmail,
            'email_interlocuteur' =>$this->faker->safeEmail,
            'telephone_interlocuteur'=> $this->faker->phoneNumber,
            'date_delais_paiement'=>$this->faker->dateTimeBetween($startDate = '-3 month',$endDate = 'now +6 month'),
            'montant_honoraire'=> $this->faker->numberBetween($min = 120000, $max = 2000000),
        ];
    }
}





