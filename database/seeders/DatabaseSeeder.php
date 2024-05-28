<?php

namespace Database\Seeders;

use Illuminate\Database\seeder;

class DatabaseSeeder extends seeder
{
    public function run()
    {
        $this->call([
            ClientsSeeder::class,
            GaragesSeeder::class,
            ContratsSeeder::class,
        ]);
    }
}
