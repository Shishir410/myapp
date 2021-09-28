<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard']);
Route::get('user/list', [App\Http\Controllers\DashboardController::class, 'list']);
Route::get('/create', [App\Http\Controllers\DashboardController::class, 'create']);
Route::post('/store', [App\Http\Controllers\DashboardController::class, 'store']);
Route::get('/list', [App\Http\Controllers\DashboardController::class, 'list']);
