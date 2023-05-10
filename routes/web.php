<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SoalPertama;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/', [TeamController::class, 'index']);
Route::get('/player', [PlayerController::class, 'index']); 
Route::get('/GetSoalPertama', [SoalPertama::class, 'GetSoalPertama']);
