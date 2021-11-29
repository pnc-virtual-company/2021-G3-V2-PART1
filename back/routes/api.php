<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Get user
Route::get('/users', [UserController::class, 'index']);

// PUBLIC ROUTE
Route::post('/register', [UserController::class, 'register']);
Route::post('/signin', [UserController::class, 'signin']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/signout', [UserController::class, 'signout']);
    
});
