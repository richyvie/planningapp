<?php

use Illuminate\Database\Seeder;
use App\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::truncate();
        
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 50; $i++) {
            Project::create([
                'project_name' => 'Project ' . $faker->sentence($nbWords = 3, $variableNbWords = true),
                'client_id' => $faker->numberBetween($min = 1, $max = 20),
                'start_date'=> $faker->date($format = 'Y-m-d', $max = 'now'),
                'end_date' => $faker->date($format = 'Y-m-d', $min= 'now')

            ]);
        }
    }
}
