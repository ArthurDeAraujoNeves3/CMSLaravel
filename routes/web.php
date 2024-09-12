<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

// Página do cliente
Route::resource("/", HomeController::class);

// Login
Route::controller(LoginController::class)->group(function () {

    Route::get("/login", "index")->name("login");
    Route::post("/login", "login");

});

//Página do admin
Route::resource("/dashboard", DashboardController::class)->middleware("auth");
