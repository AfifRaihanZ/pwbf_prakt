<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;
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
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);

Route::get('/pengguna', [PenggunaController::class, 'index']);

Route::get('/supplier', [SupplierController::class, 'index']);

Route::get('/barang', [BarangController::class, 'index']);

Route::get('/pemesanan', [PemesananController::class, 'index']);

Route::get('/penerimaan', [PenerimaanController::class, 'index']);