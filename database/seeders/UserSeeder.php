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

        $this->generateBasketballUsers();

        // $this->generateBadmintonUsers();
    }

    private function generateAdmin(): User
    {
        return User::factory()->create([
            'sport_id' => 1,
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'type' => 'admin',
            'verified' => true,
        ]);
    }

    private function generateBasketballUsers()
    {
        User::factory()
            // ->hasAttached(
            //     Team::factory(['name' => 'Svendborg Rabbits', 'country' => 'dk', 'league_id' => 1, 'logo' => 'https://media-2.api-sports.io/basketball/teams/470.png'])
            //         ->state(function (array $attributes, User $user) {
            //             return ['user_id' => $user->id];
            //         }),
            //     ['role' => 'admin']
            // )
            ->create([
                'sport_id' => 1,
                'name' => 'Test User',
                'email' => 'basketball@example.com',
                'type' => 'coach',
                'current_team_id' => 1,
            ]);

        $coach = User::factory()
            ->count(2)
            // ->hasAttached(
            //     Team::factory()
            //         ->state(new Sequence(
            //             ['name' => 'Aalborg Basketball', 'country' => 'dk', 'league_id' => 1],
            //             ['name' => 'København Basketball', 'country' => 'dk', 'league_id' => 1],
            //         ))
            //         ->state(function (array $attributes, User $coach) {
            //             return ['user_id' => $coach->id];
            //         }),
            //     ['role' => 'admin']
            // )
            // ->state(new Sequence(
            //     ['current_team_id' => 2],
            //     ['current_team_id' => 3],
            // ))
            ->create([
                'type' => 'coach',
                'verified' => true,
            ]);

        $coaches = User::factory()
            ->count(30)
            // ->state(new Sequence(
            //     ['current_team_id' => 1],
            //     ['current_team_id' => 2],
            //     ['current_team_id' => 3],
            // ))
            ->create([
                'type' => 'coach',
            ]);

        $user = User::factory()->create([
            'sport_id' => 1,
            'name' => 'Basketball User',
            'email' => 'basketballuser@example.com',
            'type' => 'player',
            // 'current_team_id' => 1,
            'verified' => true,
        ]);

        // $user->teams()->attach(1, ['role' => 'player']);

        $players = User::factory()
            ->count(30)
            // ->state(new Sequence(
            //     ['current_team_id' => 1],
            //     ['current_team_id' => 2],
            //     ['current_team_id' => 3],
            // ))
            ->create();

        // $teams = Team::where('sport_id', 1)->get();

        // $coaches->each(function ($coach) use ($teams) {
        //     $coach->teams()->attach($teams->random()->id, ['role' => 'coach']);
        // });

        // $players->each(function ($user) use ($teams) {
        //     $user->teams()->attach($teams->random()->id, ['role' => 'player']);
        // });
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
                'type' => 'coach',
                'current_team_id' => 4,
            ]);

        $coach = User::factory()
            ->count(2)
            ->hasAttached(
                Team::factory()
                    ->state(new Sequence(
                        ['name' => 'Aalborg Badminton', 'country' => 'dk', 'league' => '1. Divison'],
                        ['name' => 'København Badminton', 'country' => 'dk', 'league' => '1. Divison'],
                    ))
                    ->state(function (array $attributes, User $coach) {
                        return ['sport_id' => 2, 'user_id' => $coach->id];
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
                'type' => 'coach',
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
