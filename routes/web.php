<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PengecekanController;
use App\Http\Controllers\PemilikPemesananController;
use App\Http\Controllers\PembayaranController;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenerimaanController;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\Jenis_BarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;

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
    return view('index');
});

Route::get('/login', [LoginController::class, 'index']);

//tabel master
Route::get('/user', [PenggunaController::class, 'index']);
Route::get('/jenisbarang', [Jenis_BarangController::class, 'index']);
Route::get('/barang', [BarangController::class, 'index']);
Route::get('/ukuran', [UkuranController::class, 'index']);
Route::get('/warna', [WarnaController::class, 'index']);
//input warna baru
Route::post('/create_warna', [WarnaController::class, 'create']);
Route::get('/input_warna', [WarnaController::class, 'insert']);

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pendataan', [PendataanController::class, 'index']);
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/penerimaan', [PenerimaanController::class, 'index']);

Route::get('/pemilik', [PemilikController::class, 'index']);
Route::get('/pemilik/pengecekan', [PengecekanController::class, 'index']);
Route::get('/pemilik/pemesanan', [PemilikPemesananController::class, 'index']);
Route::get('/pemilik/pembayaran', [PembayaranController::class, 'index']);