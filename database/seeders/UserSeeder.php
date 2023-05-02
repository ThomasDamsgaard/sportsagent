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
            'verified' => true,
        ]);
    }

    private function generateHandballUsers()
    {
        User::factory()
            ->hasAttached(
                Team::factory(['name' => 'Odense Håndbold', 'country' => 'dk', 'league' => '1. Divison'])
                    ->state(function (array $attributes, User $user) {
                        return ['user_id' => $user->id];
                    }),
                ['role' => 'admin']
            )
            ->create([
                'sport_id' => 1,
                'name' => 'Test User',
                'email' => 'handball@example.com',
                'type' => 'owner',
                'current_team_id' => 1,
            ]);

        $owner = User::factory()
            ->count(2)
            ->hasAttached(
                Team::factory()
                    ->state(new Sequence(
                        ['name' => 'Aalborg Håndbold', 'country' => 'dk', 'league' => '1. Divison'],
                        ['name' => 'København Håndbold', 'country' => 'dk', 'league' => '1. Divison'],
                    ))
                    ->state(function (array $attributes, User $owner) {
                        return ['user_id' => $owner->id];
                    }),
                ['role' => 'admin']
            )
            ->state(new Sequence(
                ['current_team_id' => 2],
                ['current_team_id' => 3],
            ))
            ->create([
                'type' => 'owner',
                'verified' => true,
            ]);

        $user = User::factory()->create([
            'sport_id' => 1,
            'name' => 'Handball User',
            'email' => 'handballuser@example.com',
            'type' => 'player',
            'current_team_id' => 1,
            'verified' => true,
        ]);

        $players = User::factory()
            ->count(30)
            ->state(new Sequence(
                ['current_team_id' => 1],
                ['current_team_id' => 2],
                ['current_team_id' => 3],
            ))
            ->create();

        $teams = Team::where('sport_id', 1)->get();

        $user->teams()->attach(1, ['role' => 'player']);

        $players->each(function ($user) use ($teams) {
            $user->teams()->attach($teams->random()->id, ['role' => 'player']);
        });
    }

    private function generateBadmintonUsers()
    {
        User::factory()
            ->hasAttached(
                Team::factory(['name' => 'Odense Badminton', 'country' => 'dk', 'league' => '1. Divison'])
                    ->state(function (array $attributes, User $user) {
                        return ['sport_id' => 2, 'user_id' => $user->id];
                    }),
                ['role' => 'admin']
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
                        ['name' => 'Aalborg Badminton', 'country' => 'dk', 'league' => '1. Divison'],
                        ['name' => 'København Badminton', 'country' => 'dk', 'league' => '1. Divison'],
                    ))
                    ->state(function (array $attributes, User $owner) {
                        return ['sport_id' => 2, 'user_id' => $owner->id];
                    }),
                ['role' => 'admin']
            )
            ->state(new Sequence(
                // ['current_team_id' => 4],
                ['current_team_id' => 5],
                ['current_team_id' => 6],
            ))
            ->create([
                'sport_id' => 2,
                'type' => 'owner',
                'verified' => true,
            ]);

        $user = User::factory()->create([
            'sport_id' => 2,
            'name' => 'Badminton User',
            'email' => 'badmintonuser@example.com',
            'type' => 'player',
            'current_team_id' => 4,
            'verified' => true,
        ]);

        $players = User::factory()
            ->count(30)
            ->state(new Sequence(
                ['current_team_id' => 4],
                ['current_team_id' => 5],
                ['current_team_id' => 6],
            ))
            ->create(['sport_id' => 2]);

        $teams = Team::where('sport_id', 2)->get();

        $user->teams()->attach(4, ['role' => 'player']);

        $players->each(function ($user) use ($teams) {
            $user->teams()->attach($teams->random()->id, ['role' => 'player']);
        });
    }
}
