<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SensorDataController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('sensordata', [SensorDataController::class, 'getAll']);
Route::get('sensordata/{id}', [SensorDataController::class, 'get']);
Route::post('sensordata', [SensorDataController::class, 'create']);
Route::put('sensordata/{id}', [SensorDataController::class, 'update']);
Route::delete('sensordata/{id}',[SensorDataController::class, 'delete']);