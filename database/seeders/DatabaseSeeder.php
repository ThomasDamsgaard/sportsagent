<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'type' => 'owner',
            'current_team_id' => 1,
        ]);
        $users = \App\Models\User::factory(10)->create([
            'type' => 'player',
            'current_team_id' => 1,
        ]);
        $coaches = \App\Models\User::factory(3)->create([
            'type' => 'coach',
            'current_team_id' => 1,
        ]);

        $team = \App\Models\Team::factory()->create([
            'name' => 'Odense Håndbold',
            'user_id' => 15,
            'personal_team' => false,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'type' => 'admin',
            'current_team_id' => 1,
        ]);

        // Populate `team_users` table.
        $users->each(function ($user) use ($team) {
            $user->teams()->attach($team->pluck('id'), ['role' => 'editor']);
        });
    }
}
