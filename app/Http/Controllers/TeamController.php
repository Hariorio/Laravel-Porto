<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Team;
use App\Models\Player;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        $players = Player::all();

        return view('index',['teams'=>$teams, 'players'=>$players]);
    }
}