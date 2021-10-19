<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PemilikController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PemilikPembayaranController;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PendataanController;
use App\Http\Controllers\PembayaranController;

use App\Http\Controllers\MasterController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Jenis_BarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenerimaanController;

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

Route::get('/login',            'LoginController@index');

//tabel warna
Route::get('/warna',            'WarnaController@index');
//input warna baru
Route::post('/create_warna',     'WarnaController@create');
Route::get('/input_warna',       'WarnaController@insert');

Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pendataan', [PendataanController::class, 'index']);
Route::get('/pemesanan', [PemesananController::class, 'index']);
Route::get('/penerimaan', [PenerimaanController::class, 'index']);

Route::get('/pemilik', [PemilikController::class, 'index']);
Route::get('/pengecekan', [BarangController::class, 'index']);
Route::get('/pemilikpembayaran', [PemilikPembayaranController::class, 'index']);

Route::get('/pendataan', [PendataanController::class, 'index']);

Route::get('/datamaster', [HomeController::class, 'index']);

Route::get('/datamaster', [MasterController::class, 'index']);

Route::get('/datatransaksi', [TransaksiController::class, 'index']);

Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/jenisbarang', [Jenis_BarangController::class, 'index']);

Route::get('/ukuran', [UkuranController::class, 'index']);