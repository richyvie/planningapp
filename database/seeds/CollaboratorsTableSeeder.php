<?php

use Illuminate\Database\Seeder;
use App\Collaborator;

class CollaboratorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Collaborator::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            Collaborator::create([
                'last_name' => $faker->lastName,
                'first_name' => $faker->firstName, 
                'function_id' =>  $faker->numberBetween($min = 1, $max = 50),
                'staff_number' => $faker->numberBetween($min = 1000, $max = 9999)
            ]);
        }
    }
}
