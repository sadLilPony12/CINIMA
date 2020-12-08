<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MovieController;

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

Route::prefix('/roles')->group(function () {
    Route::get('/', [RoleController::class, 'index']);
    Route::get('/list', [RoleController::class, 'list']);
    Route::post('/save', [RoleController::class, 'save']);
    Route::put('/{role}/update', [RoleController::class, 'update']);
    Route::delete('/{role}/destroy', [RoleController::class, 'destroy']);
});

Route::prefix('/movies')->group(function () {
    Route::get('/', [MovieController::class, 'index']);
    Route::get('/list', [MovieController::class, 'list']);
    Route::post('/save', [MovieController::class, 'save']);
    Route::put('/{role}/update', [MovieController::class, 'update']);
    Route::delete('/{role}/destroy', [MovieController::class, 'destroy']);
});