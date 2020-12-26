<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorDataController;

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

Route::get('sensordata', [SensorDataController::class, 'getAll']);
Route::get('sensordata/{id}', [SensorDataController::class, 'get']);
Route::post('sensordata', [SensorDataController::class, 'create']);
Route::put('sensordata/{id}', [SensorDataController::class, 'update']);
Route::delete('sensordata/{id}',[SensorDataController::class, 'delete']);