<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Teams;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        {
            Teams::create([
                'name' => 'Veni Vidi Vici',
                'logo' => 'https://img-cdn.hltv.org/teamlogo/n5bIg6e05ZYoNR6eODzaGy.svg?ixlib=java-2.1.0&s=b12ecb0afaef1fac78d65b6a1d3c2ba2',
                'description' => 'https://lorem2.com/',
                'achievement' => 'https://lorem2.com/'
            ]);
        }
    }
}
