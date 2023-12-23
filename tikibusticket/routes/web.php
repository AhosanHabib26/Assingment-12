<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TripController;
use App\Http\Controllers\SeatAllocationController;

Route::resource('locations', LocationController::class);
Route::resource('users', UserController::class);
Route::resource('trips', TripController::class);
Route::resource('seat-allocations', SeatAllocationController::class);


Route::get('/', function () {
    return view('welcome');
});
