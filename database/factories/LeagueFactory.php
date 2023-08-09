<?php

namespace Database\Factories;

use App\Models\League;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\League>
 */
class LeagueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = League::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => 'Denmark Basketligaen',
            'country' => 'dk',
            'continent' => 'europe',
            // 'ranking' => json_encode(['18/19' => '22'], ['19/20' => '23'], ['20/21' => '15'], ['21/22' => '18'], ['22/23' => '17'])
        ];
    }
}
