<?php

namespace Database\Factories;

use App\Models\Contrat;
use App\Models\Client;
use App\Models\Garage;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContratFactory extends Factory
{
    protected $model = Contrat::class;

    public function definition()
    {
        return [
            'id_client' => Client::factory(),
            'id_garage' => Garage::factory(),
            'status' => $this->faker->randomElement(['active', 'inactive', 'delete', 'pause']),
            'structure' => $this->faker->paragraph,
        ];
    }
}
