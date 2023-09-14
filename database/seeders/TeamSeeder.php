<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Support\Str;
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
        $teams = json_decode(File::get('database/data/leagues/denmark.json'), true);

        if (app()->environment('production')) {
            collect($teams)->each(function ($team) {
                Team::create([
                    'name' => $team['name'],
                    'country' => Str::lower($team['country']['code']),
                    'logo' => $team['logo'],
                    'personal_team' => false,
                ]);
            });
        } else {
            foreach ($teams as $team) {
                Team::factory()->create([
                    'name' => $team['name'],
                    'country' => Str::lower($team['country']['code']),
                    'logo' => $team['logo'],
                ]);
            }
        }
    }
}
