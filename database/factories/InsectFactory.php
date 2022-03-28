<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insect>
 */
class InsectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(4),
            'size' => $this->faker->numberBetween(3, 7),
            'food' => $this->faker->sentences(6),
            'species' => $this->faker->sentence(4),
            'habitat' => $this->faker->sentences(6),
            'enemies' => $this->faker->sentences(6),
            'description' => $this->faker->sentences(16),
            'indicator' => $this->faker->sentences(6),
        ];
    }
}
