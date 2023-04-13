<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\AuthController;
use \App\Http\Controllers\AirportController;
use \App\Http\Controllers\AirlineController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/user-info', [AuthController::class, 'userInfo'])->middleware('auth:sanctum');

Route::get('/airports', [AirportController::class, 'index'])->middleware('auth:sanctum');
Route::post('/airports', [AirportController::class, 'store'])->middleware('auth:sanctum');
Route::put('/airports/{id}', [AirportController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/airports/{id}', [AirportController::class, 'destroy'])->middleware('auth:sanctum');



Route::get('/airlines', [AirlineController::class, 'index'])->middleware('auth:sanctum');
Route::post('/airlines', [AirlineController::class, 'store'])->middleware('auth:sanctum');
Route::put('/airlines/{id}', [AirlineController::class, 'update'])->middleware('auth:sanctum');
Route::delete('/airlines/{id}', [AirlineController::class, 'destroy'])->middleware('auth:sanctum');
