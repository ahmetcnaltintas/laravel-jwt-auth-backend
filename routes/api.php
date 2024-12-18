<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::post('register', [ApiController::class, 'register']);
Route::post('login', [ApiController::class, 'login']);

// Authenticated routes
Route::middleware('auth:api')->group(function () {

    Route::post('logout', [ApiController::class, 'logout']);
    Route::post('refresh-token', [ApiController::class, 'refresh']);

    Route::get('/user', [ApiController::class, 'user']);
});
