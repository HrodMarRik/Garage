<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contrat;

class ContratsSeeder extends Seeder
{
    public function run()
    {
        ContratFactory::factory()->count(100)->create();
    }
}
