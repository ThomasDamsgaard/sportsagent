<?php

namespace Database\Seeders;

use App\Models\Sport;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sport::factory(2)
            ->state(new Sequence(
                ['name' => 'basketball', 'positions' => json_encode(['center', 'power-forward', 'small-forward', 'point-guard', 'shooting-guard']),],
                ['name' => 'badminton', 'positions' => null],
            ))
            ->create();
    }
}
