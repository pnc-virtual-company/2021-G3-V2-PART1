<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContryController;
// Get user
Route::get('/users', [UserController::class, 'index']);

// PUBLIC ROUTE
Route::post('/register', [UserController::class, 'register']);
Route::post('/signin', [UserController::class, 'signin']);


//.........................Public Route Event..............................................
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/search/{title}',[EventController::class, 'search']);
Route::post('/events', [EventController::class, 'store']);
Route::put('/events/{id}', [EventController::class, 'update']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);
// ================== Get Coutry ============================
Route::get('countries', [ContryController::class, 'getCountries']);
