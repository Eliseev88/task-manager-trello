<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\TasktopicController;
use App\Http\Controllers\TaskController;

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

// Boards
Route::get('/boards', [BoardController::class, 'index']);
Route::prefix('/board')->group( function () {
    Route::post('/store', [BoardController::class, 'store']);
    Route::put('/{id}', [BoardController::class, 'update']);
    Route::delete('/{id}', [BoardController::class, 'destroy']);
    Route::get('/{id}', [BoardController::class, 'show']);
});

// Users
Route::get('/users', [UserController::class, 'index']);
Route::prefix('/user')->group( function () {
    Route::post('/store', [UserController::class, 'store']);
    Route::put('/{id}', [UserController::class, 'update']);
    Route::delete('/{id}', [UserController::class, 'destroy']);
    Route::get('/{id}', [UserController::class, 'show']);
});

// Groups
Route::get('/groups', [GroupController::class, 'index']);
Route::prefix('/group')->group( function () {
    Route::post('/store', [GroupController::class, 'store']);
    Route::put('/{id}', [GroupController::class, 'update']);
    Route::delete('/{id}', [GroupController::class, 'destroy']);
    Route::get('/{id}', [GroupController::class, 'show']);
});

// Task topics
Route::get('/topics', [TasktopicController::class, 'index']);
Route::prefix('/topic')->group( function () {
    Route::post('/store', [TasktopicController::class, 'store']);
    Route::put('/{id}', [TasktopicController::class, 'update']);
    Route::delete('/{id}', [TasktopicController::class, 'destroy']);
    Route::get('/{id}', [TasktopicController::class, 'show']);
});

// Tasks
Route::get('/tasks', [TaskController::class, 'index']);
Route::prefix('/task')->group( function () {
    Route::post('/store', [TaskController::class, 'store']);
    Route::put('/{id}', [TaskController::class, 'update']);
    Route::delete('/{id}', [TaskController::class, 'destroy']);
    Route::get('/{id}', [TaskController::class, 'show']);
});
