<?php

namespace Database\Factories;

use App\Models\Garage;
use Illuminate\Database\Eloquent\Factories\Factory;

class GarageFactory extends Factory
{
    protected $model = Garage::class;

    public function definition()
    {
        return [
            'adresse' => $this->faker->address,
            'montant_charges' => $this->faker->randomFloat(2, 100, 1000),
            'prix_particulier' => $this->faker->randomFloat(2, 1000, 10000),
            'prix_entreprise' => $this->faker->randomFloat(2, 1000, 10000),
            'remboursement_emprunt_mois' => $this->faker->randomFloat(2, 500, 5000),
            'date_achat' => $this->faker->date,
            'date_fin_remboursement_emprunt' => $this->faker->date,
        ];
    }
}
