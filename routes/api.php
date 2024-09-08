<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TasksController;

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

// Protected routes
Route::middleware('auth:sanctum')->group(function () {
    // User related routes
    Route::get('/user', [ApiController::class, 'getUser']);
    Route::get('user/profile', [ApiController::class, 'profile']);
    Route::post('logout', [ApiController::class, 'logout']);
    Route::get('refresh', [ApiController::class, 'refreshToken']);

    // Tasks related routes
    Route::prefix('tasks')->group(function () {
        Route::get('/', [TasksController::class, 'index']);
        Route::post('/', [TasksController::class, 'store']);
        Route::get('/{id}', [TasksController::class, 'show']);
        Route::put('/{id}', [TasksController::class, 'update']);
        Route::delete('/{id}', [TasksController::class, 'destroy']);
    });
});
