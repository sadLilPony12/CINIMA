<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;

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