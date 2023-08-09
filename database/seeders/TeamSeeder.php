<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Team::truncate();
        $json = File::get('database/data/leagues/denmark.json');
        $teams = json_decode($json, true);

        foreach ($teams as $team) {
            Team::create([
                'sport_id' => 1,
                'league_id' => 1,
                'name' => $team['name'],
                'country' => 'dk',
                'logo' => $team['logo'],
                'personal_team' => 0,
            ]);
        }
    }
}
