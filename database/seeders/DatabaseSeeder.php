<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use App\Models\Team;
use App\Models\Player;
use App\Models\Matche;
use App\Models\Classement;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UserSeeder::class,
            TeamSeeder::class,
            PlayerSeeder::class,
            MatcheSeeder::class,
            ClassementSeeder::class,
        ]);
    }
}