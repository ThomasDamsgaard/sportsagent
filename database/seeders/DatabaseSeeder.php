<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\LevelSeeder;
use Database\Seeders\SportSeeder;
use Database\Seeders\TestimonialSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            SportSeeder::class,
            LeagueSeeder::class,
            TeamSeeder::class,
            TestimonialSeeder::class,
            LevelSeeder::class,
            AchievementSeeder::class,
        ]);
    }
}
