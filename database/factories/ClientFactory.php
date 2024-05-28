<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    protected $model = Client::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'statut' => $this->faker->randomElement(['entreprise', 'particulier']),
            'phone_number' => $this->faker->phoneNumber,
            'mail' => $this->faker->unique()->safeEmail,
            'info' => $this->faker->text(200),
        ];
    }
}
