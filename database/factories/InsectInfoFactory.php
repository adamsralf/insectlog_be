<?php

namespace Database\Factories;

use App\Models\Insect;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\InsectInfo>
 */
class InsectInfoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $insect = Insect::factory()->create();

        return [
            'insect_id' => $insect->id,
            'lang' => $this->faker->languageCode,
            'name' => $this->faker->sentence(4),
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
