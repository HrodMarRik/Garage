<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Garage;

class GarageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Garage::factory()->count(10)->create();
    }
}
