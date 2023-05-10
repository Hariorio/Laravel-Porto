<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PlayerController;
use App\Http\Controllers\SoalPertama;

Route::post('/goLogin', [LoginController::class, 'goLogin'])->name('goLogin');
Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
Route::get('/', [TeamController::class, 'index']);
Route::get('/player', [PlayerController::class, 'index']); 
Route::get('/GetSoalPertama', [SoalPertama::class, 'GetSoalPertama']);