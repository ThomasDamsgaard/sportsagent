<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PlayerAttributes>
 */
class PlayerAttributesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'height' => $this->faker->numberBetween(160, 210),
            'weight' => $this->faker->numberBetween(70, 115),
            'salary' => $this->faker->numberBetween(1000, 10000),
            'currency' => '$',
            'biography' => $this->faker->text(),
            'positions' => $this->faker->randomElement(['center', 'shooting-guard', 'point-guard', 'power-forward', 'small-forward']),
            'continents' => $this->faker->randomElement(['af', 'as', 'eu', 'na', 'oc', 'sa']),
            'career' => $this->faker->text(),
        ];
    }
}
