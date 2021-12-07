<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\BarangController;

use App\Http\Controllers\PegawaiController;

use App\Http\Controllers\PemilikController;
use App\Http\Controllers\PengecekanPemilikController;
use App\Http\Controllers\PemesananPemilikController;
use App\Http\Controllers\PembayaranPemilikController;

use App\Http\Controllers\RoleController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PembayaranController;
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

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//MASTER
Route::get('/pengguna',             [PenggunaController::class, 'index']);
Route::get('/jenisbarang',          [JenisBarangController::class, 'index']);
Route::get('/ukuran',               [UkuranController::class, 'index']);
Route::get('/warna',                [WarnaController::class, 'index']);
Route::get('/barang',               [BarangController::class, 'index']);

//input user baru
Route::post('/create_user',                     [PenggunaController::class, 'create']);
Route::get('/insert_user',                      [PenggunaController::class, 'insert']);
//delete user
Route::delete('/destroy_user/{id}',             [PenggunaController::class, 'destroy']);

//input jenisbarang baru
Route::post('/create_jenis_barang',             [JenisBarangController::class, 'create']);
Route::get('/insert_jenis_barang',              [JenisBarangController::class, 'insert']);
//delete jenisbarang
Route::delete('/destroy_jenis_barang/{id}',     [JenisBarangController::class, 'destroy']);

//input ukuran baru
Route::post('/create_ukuran',           [UkuranController::class, 'create']);
Route::get('/insert_ukuran',            [UkuranController::class, 'insert']);
//delete ukuran
Route::delete('/destroy_ukuran/{id}',   [UkuranController::class, 'destroy']);

//input warna baru
Route::post('/create_warna',            [WarnaController::class, 'create']);
Route::get('/insert_warna',             [WarnaController::class, 'insert']);
//delete warna
Route::delete('/destroy_warna/{id}',    [WarnaController::class, 'destroy']);

//input barang baru
Route::post('/create_barang',           [BarangController::class, 'create']);
Route::get('/insert_barang',            [BarangController::class, 'insert']);
//delete barang
Route::delete('/destroy_barang/{id}',   [BarangController::class, 'destroy']);

Route::get('/role',                 [RoleController::class, 'index']);
Route::get('/kota',                 [KotaController::class, 'index']);
Route::get('/supplier',             [SupplierController::class, 'index']);
Route::get('/pemesanan',            [PemesananController::class, 'index']);
Route::get('/pembayaran',           [PembayaranController::class, 'index']);
Route::get('/penerimaan',           [PenerimaanController::class, 'index']);

//input role baru
Route::post('/create_role',            [RoleController::class, 'create']);
Route::get('/insert_role',             [RoleController::class, 'insert']);
//delete role
Route::delete('/destroy_role/{id}',    [RoleController::class, 'destroy']);

//input kota baru
Route::post('/create_kota',             [KotaController::class, 'create']);
Route::get('/insert_kota',              [KotaController::class, 'insert']);
//delete kota
Route::delete('/destroy_kota/{id}',     [KotaController::class, 'destroy']);

//input supplier baru
Route::post('/create_supplier',         [SupplierController::class, 'create']);
Route::get('/insert_supplier',          [SupplierController::class, 'insert']);
//delete supplier
Route::delete('/destroy_supplier/{id}', [SupplierController::class, 'destroy']);

//input pemesanan baru
Route::post('/create_pemesanan',           [PemesananController::class, 'create']);
Route::get('/insert_pemesanan',            [PemesananController::class, 'insert']);
//delete pemesanan
Route::delete('/destroy_pemesanan/{id}',   [PemesananController::class, 'destroy']);

//input penerimaan baru
Route::post('/create_penerimaan',           [PenerimaanController::class, 'create']);
Route::get('/insert_penerimaan',            [PenerimaanController::class, 'insert']);
//delete penerimaan
Route::delete('/destroy_penerimaan/{id}',   [PenerimaanController::class, 'destroy']);

//PEGAWAI
Route::get('/pegawai',              [PegawaiController::class, 'index']);

//PEMILIK
Route::get('/pemilik',              [PemilikController::class, 'index']);
Route::get('/pemilik/pengecekan',   [PengecekanPemilikController::class, 'index']);
Route::get('/pemilik/pemesanan',    [PemesananPemilikController::class, 'index']);
Route::get('/pemilik/pembayaran',   [PembayaranPemilikController::class, 'index']);

//input pembayaran baru pemilik
Route::post('/create_pembayaran',           [PembayaranPemilikController::class, 'create']);
Route::get('/insert_pembayaran',            [PembayaranPemilikController::class, 'insert']);
//delete pembayaran pemilik
Route::delete('/destroy_pembayaran/{id}',   [PembayaranPemilikController::class, 'destroy']);