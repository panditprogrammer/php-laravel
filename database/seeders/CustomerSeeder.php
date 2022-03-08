<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // all data are random 
        $faker = Faker::create();
        for ($i=0; $i < 100; $i++) { 
            
            $customer = new Customer();
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->gender = "F";
            $customer->address = $faker->address;
            $customer->state = $faker->state;
            $customer->country = $faker->country;
            $customer->dob = now();
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
