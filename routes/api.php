<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('room',[\App\Http\Controllers\RoomController::class,'index']);
Route::post('room',[\App\Http\Controllers\RoomController::class,'store']);
Route::put('room/{id}',[\App\Http\Controllers\RoomController::class,'update']);
Route::delete('room/{id}',[\App\Http\Controllers\RoomController::class,'destroy']);

Route::get('book',[\App\Http\Controllers\BookController::class,'index']);
Route::post('book',[\App\Http\Controllers\BookController::class,'store']);
Route::put('book/{id}',[\App\Http\Controllers\BookController::class,'update']);
Route::delete('book/{id}',[\App\Http\Controllers\BookController::class,'destroy']);
