<?php

namespace Database\Factories;

use App\Models\Modelcontrat;
use Illuminate\Database\Eloquent\Factories\Factory;

class ModelContratsFactory extends Factory
{
    protected $model = Modelcontrat::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'status' => $this->faker->randomElement(['pending', 'active', 'completed']),
            'structure' => $this->faker->word,
        ];
    }
}
