<?php

use Illuminate\Database\Seeder;
use App\Models\Teams;
use App\Models\Players;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(TeamsTableSeeder::class);
        $this->call(PlayersTableSeeder::class);
        $this->call(UserSeeder::class);
    }
}