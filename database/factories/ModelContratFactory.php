<?php

namespace Database\Factories;

use App\Models\model_contrat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelContratFactory extends Factory
{
    protected $model = model_contrat::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement(['pending', 'active', 'completed']),
            'structure' => $this->faker->word,
        ];
    }
}
