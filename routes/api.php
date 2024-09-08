<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Public routes
Route::post('register', [ApiController::class, 'register']);
Route::post('login', [ApiController::class, 'login']);

// Authenticated routes
Route::middleware('auth:api')->group(function () {

    Route::post('logout', [ApiController::class, 'logout']);
    Route::post('refresh-token', [ApiController::class, 'refresh']);

    Route::get('/user', [ApiController::class, 'profile']);
});
