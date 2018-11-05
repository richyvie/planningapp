<?php

use Illuminate\Database\Seeder;
use App\Planning;

class PlanningTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Planning::truncate();

        $faker = \Faker\Factory::create();
        
        for ($i = 0; $i < 20; $i++) {
            Planning::create([
                'work_date' => '2018-10-01',
                'nb_hours' => 8,
                'project_id' => $faker->numberBetween($min = 1, $max = 20),
                'activity_id' => $faker->numberBetween($min = 1, $max = 50),
                'collaborator_id' => $faker->numberBetween($min = 1, $max = 30)
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            Planning::create([
                'work_date' => '2018-10-02',
                'nb_hours' => 8,
                'project_id' => $faker->numberBetween($min = 1, $max = 20),
                'activity_id' => $faker->numberBetween($min = 1, $max = 50),
                'collaborator_id' => $faker->numberBetween($min = 1, $max = 30)
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            Planning::create([
                'work_date' => '2018-10-03',
                'nb_hours' => 8,
                'project_id' => $faker->numberBetween($min = 1, $max = 20),
                'activity_id' => $faker->numberBetween($min = 1, $max = 50),
                'collaborator_id' => $faker->numberBetween($min = 1, $max = 30)
            ]);
        }

    }
}
