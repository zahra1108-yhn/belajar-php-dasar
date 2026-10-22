<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PengelolaController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\TransaksiController;

// =========================
// ROOT & AUTHENTICATION
// =========================

Route::get('/', function () {
    return redirect('/login');
});

Route::get('/login', [AuthController::class, 'showLogin'])
    ->name('login');

Route::post('/login', [AuthController::class, 'login'])
    ->name('login.process');

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');


// =========================
// ROUTE SETELAH LOGIN
// =========================

Route::middleware('auth')->group(function () {

    // ADMIN
    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin.index');

    Route::post('/admin/user', [AdminController::class, 'storeUser'])
        ->name('admin.user.tambah');

    Route::post('/admin/user/{id}', [AdminController::class, 'destroyUser'])
        ->name('admin.user.hapus');

    Route::put('/admin/transaksi/{id}', [AdminController::class, 'updateTransaksi'])
        ->name('admin.transaksi.update');


    // PENGELOLA
    Route::get('/pengelola', [PengelolaController::class, 'index'])
        ->name('pengelola.index');


    // DRIVER
    Route::get('/driver', [DriverController::class, 'index'])
        ->name('driver.index');

    Route::put('/driver/transaksi/{id}', [DriverController::class, 'updateStatus'])
        ->name('driver.updateStatus');


    // TRANSAKSI
    Route::get('/transaksi', [TransaksiController::class, 'index'])
        ->name('transaksi.index');

    Route::post('/transaksi', [TransaksiController::class, 'store'])
        ->name('transaksi.store');

    Route::delete('/transaksi/{id}', [TransaksiController::class, 'destroy'])
        ->name('transaksi.destroy');

});