<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\GenreController;

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
    Route::get('/expired', [MovieController::class, 'expired']);
    Route::get('/showing', [MovieController::class, 'showing']);
    Route::get('/coming/soon', [MovieController::class, 'coming_soon']);
    Route::post('/save', [MovieController::class, 'save']);
    Route::put('/{role}/update', [MovieController::class, 'update']);
    Route::delete('/{role}/destroy', [MovieController::class, 'destroy']);
});


Route::prefix('/genres')->group(function () {
    Route::get('/', [GenreController::class, 'index']);
    Route::get('/movies', [GenreController::class, 'movies']);
    Route::get('/list', [GenreController::class, 'list']);
});