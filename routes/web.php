<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\DarkModeController;
use App\Http\Controllers\ColorSchemeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BarangController;

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

Route::get('dark-mode-switcher', [DarkModeController::class, 'switch'])->name('dark-mode-switcher');
Route::get('color-scheme-switcher/{color_scheme}', [ColorSchemeController::class, 'switch'])->name('color-scheme-switcher');

Route::controller(AuthController::class)->middleware('loggedin')->group(function() {
    Route::get('login', 'loginView')->name('login.index');
    Route::post('login', 'login')->name('login.check');
});

Route::middleware('auth')->group(function() {
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('/', [DashboardController::class, 'index'])->name('dashboardindex');
    Route::get('barang', [BarangController::class, 'index']);
    Route::get('barang/{id}', [BarangController::class, 'detail'])->where('id', '[0-9]+');
   //Route::get('/', [PageController::class, 'dashboardOverview1'])->name('dashboard-overview-1');

   Route::get('data_barang', [PageController::class, 'data_barang'])->name('data_barang');
   Route::get('dashboard-overview-3-page', [PageController::class, 'dashboardOverview3'])->name('dashboard-overview-3');
   Route::get('inbox-page', [PageController::class, 'inbox'])->name('inbox');
   Route::get('file-manager-page', [PageController::class, 'filemanager'])->name('file-manager');
   Route::get('point-of-sale-page', [PageController::class, 'pointofsale'])->name('file-manager');

   

    
   
});