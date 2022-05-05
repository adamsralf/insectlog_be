<?php

namespace Database\Factories;

use App\Models\InsectInfo;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Log>
 */
class LogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'insect_id' => InsectInfo::factory(1)->create()->first()->id,
            'user_id' => User::factory(1)->create()->first()->id,
            'device_id' => $this->faker->numberBetween(1000000, 99999999),
            'latitude' => $this->faker->randomFloat(8),
            'longitude' => $this->faker->randomFloat(8),
            'altitude' => $this->faker->randomFloat(8)
        ];
    }
}
