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
        \App\Models\User::factory(10)->create([
            'type' => 'player',
            'current_team_id' => 1,
        ]);
        \App\Models\User::factory(3)->create([
            'type' => 'coach',
            'current_team_id' => 1,
        ]);

        \App\Models\Team::factory()->create([
            'name' => 'GOG',
            'user_id' => 1,
            'personal_team' => false,
        ]);

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'user@example.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'type' => 'admin'
        ]);
    }
}
