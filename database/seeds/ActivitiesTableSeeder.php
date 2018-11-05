<?php

use Illuminate\Database\Seeder;
use App\Activity;

class ActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    
    public function run()
    {
        Activity::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Activity::create([
                'activity' => $faker->sentence($nbWords = 3, $variableNbWords = true)
            ]);
        }
    }
}
