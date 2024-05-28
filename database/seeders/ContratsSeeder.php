<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Contrat;

class ContratSeeder extends Seeder
{
    public function run()
    {
        Contrat::factory()->count(100)->create();
    }
}
