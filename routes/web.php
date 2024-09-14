<?php

use App\Http\Controllers\HeroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Página do cliente
Route::resource("/", PortfolioController::class);

// Login
Route::controller(LoginController::class)->group(function () {

    Route::get("/login", "index")->name("login");
    Route::post("/login", "verify");

});

// Página do admin
// Hero
Route::resource("/dashboard", HeroController::class)->middleware("auth");
