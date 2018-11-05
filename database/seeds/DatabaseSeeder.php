<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ActivitiesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(CollaboratorsTableSeeder::class);
        $this->call(JobrolesTableSeeder::class);
        $this->call(ProjectsTableSeeder::class);
        $this->call(PlanningTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
