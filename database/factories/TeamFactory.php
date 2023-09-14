<?php

namespace Database\Factories;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TeamFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Team::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->company(),
            'sport_id' => 1,
            'league_id' => 1,
            'personal_team' => false,
            'contact' => ['name' => 'Contact Person', 'email' => $this->faker->safeEmail()],
            'website' => $this->faker->url(),
            'socials' => [
                ['facebook' => 'https://facebook.com/'],
                ['x' => 'https://twitter.com/']
            ],
        ];
    }
}
