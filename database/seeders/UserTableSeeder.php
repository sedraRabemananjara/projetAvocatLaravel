<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Let's clear the users table first
        User::truncate();

        $faker = \Faker\Factory::create();

        // Let's make sure everyone has the same password and 
        // let's hash it before the loop, or else our seeder 
        // will be too slow.
        $password = Hash::make('toptal');

     

        // And now let's generate a few dozen users for our app:
        for ($i = 0; $i < 10; $i++) {
            User::create([
                'nom' => $faker->name(),
                'prenom' => $faker->name(),
                'adresse'=>"LOT".$faker->numberBetween(25, 45),
                'contact' => $faker->phoneNumber,
                'email' => $faker->safeEmail,
                "est_admin" => $faker->randomElement(["true", "false"]),
                'password' => $password,
            ]);
        }
    }
}
