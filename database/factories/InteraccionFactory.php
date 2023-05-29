<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Interaccion>
 */
class InteraccionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'idInterested' => $this->faker->numberBetween(1, 10),
            'idCandidate' => $this->faker->numberBetween(1, 10),
            'type' => $this->faker->randomElement(['A', 'R']),
        ];
    }
}
