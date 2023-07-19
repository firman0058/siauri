<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MonitoringController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::resource('data', DataController::class);
Route::resource('test', TestController::class);

Route::get('download', [DataController::class, 'downloadpdf']);
Route::post('sensorpost', [PostController::class, 'storeOrUpdate']);
