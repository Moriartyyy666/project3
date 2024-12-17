<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MidtransController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login-proses', [LoginController::class, 'proses'])->name('login.proses');

Route::middleware(['auth'])->group(function () {
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    Route::get('admin', [AdminController::class, 'index'])->name('admin');

    Route::get('produk', [AdminController::class, 'produk'])->name('produk');
    Route::post('produk/proses', [AdminController::class, 'produkStore'])->name('produk.proses');
    Route::delete('produk/{produk}/delete', [AdminController::class, 'produkHapus'])->name('produk.hapus');

    Route::get('/home', [HomeController::class, 'index'])->name('dashboard');
    Route::get('home/{nama_produk}', [HomeController::class, 'produk'])->name('dashboard.produk');
    Route::post('home/{nama_produk}', [HomeController::class, 'produkStore'])->name('dashboard.produk.store');
    Route::get('/produk/{id}/edit', [AdminController::class, 'produkEdit'])->name('produk.edit');
    Route::put('/produk/{id}', [AdminController::class, 'produkUpdate'])->name('produk.update');

    Route::post('/midtrans/notification', [MidtransController::class, 'handleNotification']);
});
