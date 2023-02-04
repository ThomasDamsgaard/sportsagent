<?php

namespace Database\Seeders;

use App\Models\Team;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'sport_id' => NULL,
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'type' => 'admin',
        ]);

        User::factory()
            ->hasAttached(
                Team::factory(['name' => 'Odense Håndbold'])
                    ->state(function (array $attributes, User $user) {
                        return ['user_id' => $user->id];
                    })
            )
            ->create([
                'sport_id' => 1,
                'name' => 'Test User',
                'email' => 'user@example.com',
                'type' => 'owner',
                'current_team_id' => 1,
            ]);

        $owner = User::factory()
            ->count(2)
            ->hasAttached(
                Team::factory()
                    ->state(new Sequence(
                        ['name' => 'Aalborg Håndbold'],
                        ['name' => 'København Håndbold'],
                    ))
                    ->state(function (array $attributes, User $owner) {
                        return ['user_id' => $owner->id];
                    })
            )
            ->state(new Sequence(
                ['current_team_id' => 1],
                ['current_team_id' => 2],
                ['current_team_id' => 3],
            ))
            ->create([
                'type' => 'owner',
            ]);

        $players = User::factory()
            ->count(30)
            ->state(new Sequence(
                ['current_team_id' => 1],
                ['current_team_id' => 2],
                ['current_team_id' => 3],
            ))
            ->create();
    }
}
