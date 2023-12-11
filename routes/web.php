<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\BukuTamuController;
use App\Http\Controllers\Dashboard\BukuTamuController as DashboardBukuTamuController;
use App\Http\Controllers\Dashboard\DashboardController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('get/BukuTamu', [BukuTamuController::class,'data_table'])->name('get.dataBukuTamu');
Route::resource('buktamu', BukuTamuController::class, ['names' => 'buku.tamu']);
Route::resource('survei', SurveiController::class, ['names' => 'survei']);

Route::group(['prefix' => 'dashboard'], function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::resource('bukutamu', DashboardBukuTamuController::class, ['names' => 'dashboard.bukutamu'])->except('show');
    Route::get('get/BukuTamuDashboard', [DashboardBukuTamuController::class,'data_table'])->name('get.dataBukuTamuDashboard');
});
