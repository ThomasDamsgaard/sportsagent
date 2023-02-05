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
        $this->generateAdmin();

        $this->generateHandballUsers();

        $this->generateBadmintonUsers();
    }

    private function generateAdmin(): User
    {
        return User::factory()->create([
            'sport_id' => NULL,
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'type' => 'admin',
        ]);
    }

    private function generateHandballUsers()
    {
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

    private function generateBadmintonUsers()
    {
        User::factory()
            ->hasAttached(
                Team::factory(['name' => 'Odense Badminton'])
                    ->state(function (array $attributes, User $user) {
                        return ['sport_id' => 2, 'user_id' => $user->id];
                    })
            )
            ->create([
                'sport_id' => 2,
                'name' => 'Badminton User',
                'email' => 'badminton@example.com',
                'type' => 'owner',
                'current_team_id' => 4,
            ]);

        $owner = User::factory()
            ->count(2)
            ->hasAttached(
                Team::factory()
                    ->state(new Sequence(
                        ['name' => 'Aalborg Badminton'],
                        ['name' => 'København Badminton'],
                    ))
                    ->state(function (array $attributes, User $owner) {
                        return ['sport_id' => 2, 'user_id' => $owner->id];
                    })
            )
            ->state(new Sequence(
                ['current_team_id' => 4],
                ['current_team_id' => 5],
                ['current_team_id' => 6],
            ))
            ->create([
                'sport_id' => 2,
                'type' => 'owner',
            ]);

        $players = User::factory()
            ->count(30)
            ->state(new Sequence(
                ['current_team_id' => 4],
                ['current_team_id' => 5],
                ['current_team_id' => 6],
            ))
            ->create(['sport_id' => 2]);
    }
}
