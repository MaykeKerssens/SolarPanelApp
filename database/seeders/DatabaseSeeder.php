<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\SolarPanelSystem;
use App\Models\Subscription;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // faker
        $faker = \Faker\Factory::create();
        // create customers
        for($i = 0; $i < 10; $i++) {
            $customer = \App\Models\Customer::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'phone' => $faker->phoneNumber,
                'address' => $faker->address,
                'zip' => $faker->postcode,
                'city' => $faker->city,
            ]);
        }

        // create 3 systems
        SolarPanelSystem::create([
            'name' => 'Light',
        ]);

        SolarPanelSystem::create([
            'name' => 'Normal',
        ]);

        SolarPanelSystem::create([
            'name' => 'Premium',
        ]);

        // create 1 subscription
        Subscription::create([
            'solar_panel_system_id' => 2,
            'customer_id' => 1,
        ]);

        // create 50 panels, first 10 attached to subscription
        for($i = 0; $i < 50; $i++) {
            $panel = \App\Models\Panel::create([
                'serial_number' => $faker->uuid,
                'solar_panel_system_id' => rand(1, 3),
            ]);

            if($i < 10) {
                $panel->solar_panel_system_id = 2;
                $panel->subscription_id = 1;
                $panel->save();
            }
        }







    }
}
