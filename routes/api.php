<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\PhilosopherController;


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
//Work with QUOTES
/* Public routes */

Route::get('/quotes', [QuoteController::class, 'index']);
Route::get('/quotes/{id}', [QuoteController::class, 'show']);
Route::get('/quotes/search/{term}', [QuoteController::class, 'search']);
/* Auth routes */
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/quotes', [QuoteController::class, 'store']);
    Route::put('/quotes/{id}', [QuoteController::class, 'update']); //Don't know how to implement this route with parameters
    Route::delete('/quotes/{id}', [QuoteController::class, 'destroy']); //
    Route::post('/philosophers', [PhilosopherController::class, 'store']); //create philos
    Route::post('/logout', [UserController::class, 'logout']);
});

// Work with PHILOSOPHERS
Route::get('/philosophers', [PhilosopherController::class, 'index']);


// Work with user
Route::post('/register', [UserController::class, 'register']);
Route::post('/login', [UserController::class, 'login']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
