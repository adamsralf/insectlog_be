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
            'species_name' => $this->faker->sentence(4),
            'size' => $this->faker->numberBetween(3, 7),
            'food' => join(', ', $this->faker->words(6)),
            'species' => $this->faker->sentence(4),
            'habitat' => join(', ', $this->faker->words(6)),
            'enemies' => join(', ', $this->faker->words(6)),
            'description' => join(', ', $this->faker->words(6)),
            'indicator' => join(', ', $this->faker->words(6)),
        ];
    }
}
