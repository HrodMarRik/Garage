<?php

namespace Database\Seeders;

use App\Models\Modelcontrat;
use Illuminate\Database\Seeder;

class ModelContratsSeeder extends Seeder
{
    public function run()
    {
        // Créer 10 instances de model_contrat
        Modelcontrat::factory()->count(10)->create();
    }
}
