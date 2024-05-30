<?php

namespace Database\Seeders;

use App\Models\model_contrat;
use Illuminate\Database\Seeder;

class ModelContratsSeeder extends Seeder
{
    public function run()
    {
        // Créer 10 instances de model_contrat
        model_contrat::factory()->count(10)->create();
    }
}
