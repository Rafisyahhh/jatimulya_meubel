<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BarangMasukController;
use App\Http\Controllers\BarangKeluarController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DataTransaksiController;
use App\Http\Controllers\KeuanganController;

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
    return view('index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('user', UserController::class);
Route::resource('barang', BarangController::class);
Route::resource('barang_masuk', BarangMasukController::class);
Route::resource('barang_keluar', BarangKeluarController::class);
Route::resource('transaksi', DataTransaksiController::class);
Route::resource('cetak_transaksi', TransaksiController::class);
Route::resource('keuangan', KeuanganController::class);
Route::get('/transaksi/export', [TransaksiController::class, 'export'])->name('transaksi.export');
