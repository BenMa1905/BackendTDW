<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerroController;

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
Route::get('/perros', [PerroController::class, 'index']);
Route::get('/perros/{id}', [PerroController::class, 'show']);
Route::post('/perros', [PerroController::class, 'store']);
Route::put('/perros/{id}', [PerroController::class, 'update']);
Route::delete('/perros/{id}', [PerroController::class, 'destroy']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
