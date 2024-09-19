<?php

use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\ExperiencesController;
use App\Http\Controllers\ExpertiseEditController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\HeroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\ProjectsEditController;
use Illuminate\Support\Facades\Route;

// Portifólio
Route::resource("/", PortfolioController::class);

// Login
Route::controller(LoginController::class)->group(function () {

    Route::get("/login", "index")->name("login");
    Route::post("/login", "verify");

});

// Página admin
// General
Route::resource("/general", GeneralController::class)->middleware("auth");
// Hero
Route::resource("/dashboard", HeroController::class)->middleware("auth");
// Sobre mim
Route::resource("/aboutMe", AboutMeController::class)->middleware("auth");
// Experiências
Route::resource("/experiences", ExperiencesController::class)->middleware("auth");
Route::get("/experiences/edit/{id}", [ExpertiseEditController::class, "index"])->name("experienceEdit.index")->middleware("auth");
// Projetos
Route::resource("/projects", ProjectsController::class)->middleware("auth");
Route::get("/projects/edit/{id}", [ProjectsEditController::class, "index"])->name("projectsEdit.index")->middleware("auth");
