<?php

namespace Database\Seeders;

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
        $owner = User::factory()
            ->create([
                'sport_id' => 1,
                'name' => 'Owner User',
                'email' => 'basketballowner@example.com',
                'type' => 'owner',
                'current_team_id' => 1,
            ]);

        // $coaches = User::factory()
        //     ->hasAttached(PlayerAttributes::factory())
        //     // ->for(PlayerAttributes::factory(), 'attributable')
        //     ->count(30)
        //     ->create([
        //         'type' => 'coach',
        //     ]);

        $users = User::factory()
            ->forPlayerAttributes()->count(30)->create();
    }
}
