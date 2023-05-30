<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CitiesController;
use App\Http\Controllers\api\WetnessController;


Route::get('cities', [CitiesController::class, 'index'])->name('cities');
Route::apiResource('wetness', WetnessController::class)->names('wetness');

