<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\UserController;

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

Route::post('myapi/signup', [AuthController::class, 'signup']);
Route::post('myapi/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::get('myapi/users', [UserController::class, 'index']);
    Route::post('myapi/users', [UserController::class, 'store']);
    Route::get('myapi/users/{id}', [UserController::class, 'show']);
    Route::put('myapi/users/{id}', [UserController::class, 'update']);
    Route::delete('myapi/users/{id}', [UserController::class, 'destroy']);
});
