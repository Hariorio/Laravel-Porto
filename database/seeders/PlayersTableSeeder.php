<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Players;

class PlayersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $players = [
            [
                'name' => 'Tony Krogh',
                'photo' => 'https://stability.ai/',
                'ign' => 'VVVTony',
                'instagram' => 'https://www.instagram.com/tony/',
                'facebook' => 'https://www.facebook.com/Tony',
            ],
            [
                'name' => 'Stig Olsen',
                'photo' => 'https://stability.ai/',
                'ign' => 'VVVStig',
                'instagram' => 'https://instagram.com/stig',
                'facebook' => 'https://facebook.com/stig',
            ],
            
            [
                'name' => 'Jannik Abildgaard',
                'photo' => 'https://stability.ai/',
                'ign' => 'VVVJannik',
                'instagram' => 'https://instagram.com/jannik',
                'facebook' => 'https://facebook.com/jannik',
            ],

            [
                'name' => 'Steffen Wulff',
                'photo' => 'https://stability.ai/',
                'ign' => 'VVVSteffen',
                'instagram' => 'https://instagram.com/steffen',
                'facebook' => 'https://facebook.com/steffen',
            ],
            
            [
                'name' => 'Storm Mork',
                'photo' => 'https://stability.ai/',
                'ign' => 'VVVStorm',
                'instagram' => 'https://instagram.com/storm',
                'facebook' => 'https://facebook.com/storm',
            ],
            
            
            
        ];

        foreach ($players as $playerData) {
            Players::create($playerData);
        }
    }
}

