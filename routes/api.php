<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;
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

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

//API Routes
Route::post('register', [ApiController::class, 'register']);
Route::post('login', [ApiController::class, 'login']);

Route::group([
    "middleware" => ["auth:api"]
], function(){

    Route::get('user/me', [ApiController::class, 'profile']);
    Route::get('refresh', [ApiController::class, 'refreshToken']);
    Route::get('logout', [ApiController::class, 'logout']);


    Route::post('tasks/add', [TasksController::class, 'create']);
    Route::put('tasks/{id}', [TasksController::class, 'edit']);
    Route::get('tasks', [TasksController::class, 'show']);
});
