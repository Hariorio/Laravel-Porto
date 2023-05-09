<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SoalPertama;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;

Route::get('/', [TeamController::class, 'index']);
Route::get('/player', [PlayerController::class, 'index']); 
Route::get('/GetSoalPertama', [SoalPertama::class, 'GetSoalPertama']);


