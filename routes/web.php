<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\BarangmasukController;
use App\Http\Controllers\CostumerController;
use App\Http\Controllers\TransaksiController;
use App\Models\Barangmasuk;

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



//login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'store'])->name('login.store');
Route::get('/sign-out', [LoginController::class, 'show'])->name('signout');

// admin
Route::middleware('user-access:admin')->group(function () {
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::resource('barang', BarangController::class);
Route::resource('costumer', CostumerController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('barang-masuk', BarangmasukController::class);

Route::get('pdf/cetak', [TransaksiController::class, 'cetakpdf'])->name('cetakpdf');
Route::get('pdf/cetak_barang', [BarangmasukController::class, 'cetakpdf1'])->name('cetakpdfbarang');
});



//superadmin
Route::middleware('user-access:superadmin')->group(function () {
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
Route::resource('barang', BarangController::class);
Route::resource('costumer', CostumerController::class);
Route::resource('transaksi', TransaksiController::class);
Route::resource('barang-masuk', BarangmasukController::class);

Route::get('pdf/cetak', [TransaksiController::class, 'cetakpdf'])->name('cetakpdf');
Route::get('pdf/cetak_barang', [BarangmasukController::class, 'cetakpdf1'])->name('cetakpdfbarang');
});
