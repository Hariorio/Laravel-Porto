<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

use App\Models\Player;

class PlayerController extends Controller
{
    public function index()
    {
        $players = Player::all();

        return view('index', ['players'=>$players]);
    }
}