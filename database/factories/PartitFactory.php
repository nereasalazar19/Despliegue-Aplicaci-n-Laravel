<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partit>
 */
class PartitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'local' => $this->faker->company(),
            'visitant' => $this->faker->company(),
            'data' => $this->faker->date(),
            'resultat' => $this->faker->randomElement([null, $this->faker->randomDigitNotNull . '-' . $this->faker->randomDigitNotNull]),
        ];
    }
}
