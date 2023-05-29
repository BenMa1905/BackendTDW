<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroController;
use App\Http\Controllers\InteraccionController;

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

// * PERROS
Route::get('/perros', [PerroController::class, 'index']);
Route::get('/perros/{id}', [PerroController::class, 'show']);
Route::post('/perros', [PerroController::class, 'store']);
Route::put('/perros/{id}', [PerroController::class, 'update']);
Route::delete('/perros/{id}', [PerroController::class, 'destroy']);

// * INTERACCIONES
Route::get('/interacciones', [InteraccionController::class, 'index']);
Route::get('/interacciones/{id1}/{id2}', [InteraccionController::class, 'show']);
Route::post('/interacciones/{id1}/{id2}', [InteraccionController::class, 'store']);
Route::put('/interacciones/{id1}/{id2}', [InteraccionController::class, 'update']);
Route::delete('/interacciones/{id1}/{id2}', [InteraccionController::class, 'destroy']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
