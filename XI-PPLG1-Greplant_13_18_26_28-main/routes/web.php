<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\IslandPlantController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class,"index"])->name("home");

Route::get("/island/{id}", [IslandPlantController::class, 'showIsland'])->name('island.show');