<?php

use Illuminate\Database\Seeder;
use App\Client;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Client::truncate();
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 30; $i++) {
            Client::create([
                'client_name' => $faker->company,
                'main_contact' => $faker->name ,
                'address' =>  $faker->streetAddress,
                'zip' => $faker->postcode,
                'city' => $faker->city,
                'phone' => $faker->e164PhoneNumber,
                'email' => $faker->companyEmail
            ]);
        }
    }
}
