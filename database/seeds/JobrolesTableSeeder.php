<?php

use Illuminate\Database\Seeder;
use App\Jobrole;

class JobrolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jobrole::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Jobrole::create([
                'job_title' => $faker->jobTitle
            ]);
        }
    }
}
