<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'writer_id' => $this->faker->numberBetween(2, 35),
            'user_id' => $this->faker->numberBetween(1, 35),
            'body' => $this->faker->text()
        ];
    }
}
