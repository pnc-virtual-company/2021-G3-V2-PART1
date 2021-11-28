<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
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


///...............................User.................................................

Route::post('/register', [UserController::class, 'register']);
Route::post('/signin', [UserController::class, 'signin']);

//.........User..................................
Route::get('/users', [UserController::class, 'index']);
// Route::update('/users/{id}', [UserController::class, 'update']);
// Route::delete('/users/{id}', [UserController::class, 'destroy']);


//...............................Public Route (Event)..........................................
// Route::get('/events',[EventController::class, 'index']);
// Route::get('/events/{id}', [EventController::class, 'show']);

//...............................Private Route (Event)..........................................
Route::group(['middleware' => ['auth:sanctum']], function(){
    // Route::post('/events',[EventController::class, 'store']);
    // Route::put('/events/{id}', [EventController::class, 'update']);
    // Route::delete('/events/{id}', [EventController::class, 'destroy']);
    Route::post('/signout', [UserController::class,'signout']);
});