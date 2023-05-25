<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Level>
 */
class LevelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        static $increment = 1;

        return [
            'user_id' => $increment++,
            'level' => $this->faker->randomElement(['amateur', 'semi professional', 'professional']),
            'rank' => $this->faker->randomElement(['a', 'b', 'c']),
        ];
    }
}
