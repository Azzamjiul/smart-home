<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PirPageController;
use App\Http\Controllers\CurrentSensorController;

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
    // return view('welcome');
    return redirect()->route('dashboard');
});
Route::get('/demo', function () {
    return view('demo');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/pir_sensor_data', [PirPageController::class, 'index'])->name('lamp_data');
Route::get('/current_sensor_data', [CurrentSensorController::class, 'index'])->name('current_sensor_data');