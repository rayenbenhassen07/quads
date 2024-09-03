<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TripController;
use App\Http\Controllers\TripScheduleController;
use App\Http\Controllers\TripOptionController;
use App\Http\Controllers\TripImageController;

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Grouped routes under "trips" prefix
Route::prefix('trips')->group(function () {
    Route::apiResource('/', TripController::class);
    Route::apiResource('schedules', TripScheduleController::class);
    Route::apiResource('options', TripOptionController::class);
    Route::apiResource('images', TripImageController::class);
});

Route::post('/register', [RegisterController::class, 'register']);
Route::post('/login', [LoginController::class, 'login']);