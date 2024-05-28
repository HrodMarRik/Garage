<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Garage;

class GaragesSeeder extends Seeder
{
    public function run()
    {
        GarageFactory::factory()->count(20)->create();
    }
}
