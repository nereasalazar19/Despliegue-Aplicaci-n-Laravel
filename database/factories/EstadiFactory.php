<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Estadi>
 */
class EstadiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {   
        $ciutat = $this->faker->unique()->city;
        return [
            'nom' => $ciutat . ' Stadium',
            'ciutat' => $ciutat,
            'capacitat' => $this->faker->numberBetween(10000, 100000),
        ];
    }
}
