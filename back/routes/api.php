<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

// Get user
Route::get('/users', [UserController::class, 'index']);

// PUBLIC ROUTE
Route::post('/register', [UserController::class, 'register']);
Route::post('/signin', [UserController::class, 'signin']);

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\CountriesController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//...........................Public Route Category.......................................
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get('/categories/search/{categoryName}',[CategoryController::class, 'search']);

//...........................Private Route  Category.......................................
Route::post('/categories', [CategoryController::class, 'store']);
Route::put('/categories/{id}', [CategoryController::class, 'update']);
Route::delete('/categories/{id}', [CategoryController::class, 'destroy']);

//.........................Public Route Event..............................................
Route::get('/events', [EventController::class, 'index']);
Route::get('/events/search/{title}',[EventController::class, 'search']);
Route::get('/events/searchCity/{city}',[EventController::class, 'searchCity']);

Route::post('/events', [EventController::class, 'store']);
Route::put('/events/{id}', [EventController::class, 'update']);
Route::delete('/events/{id}', [EventController::class, 'destroy']);

//...........................Private Route Event...........................................


//..................................Route Joins Events.....................................

Route::get('/joins', [JoinController::class, 'index']);
Route::post('/joins', [JoinController::class, 'store']);
Route::delete('/joins/{id}',[JoinController::class, 'destroy']);
// ............................. Route Countries...........................................
Route::get('/countries',[CountriesController::class, 'getCountries']);



