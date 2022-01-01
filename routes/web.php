<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginPegawaiController;
use App\Http\Controllers\LoginPemilikController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\BarangController;

use App\Http\Controllers\HistoryStockController;

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

Route::get('/loginpegawai',         [LoginPegawaiController::class, 'index']);
Route::post('/loginpegawai',        [LoginPegawaiController::class, 'authentication']);

Route::get('/loginpemilik',         [LoginPemilikController::class, 'index']);
Route::post('/loginpemilik',        [LoginPemilikController::class, 'authentication']);

Route::get('/register',             [RegisterController::class, 'index']);
Route::post('/register',            [RegisterController::class, 'store']);

//PEGAWAI
Route::get('/pegawai',                 [PegawaiController::class, 'index']);

//MASTER
Route::get('/pengguna',                         [PenggunaController::class, 'index']);
Route::get('/jenisbarang',                      [JenisBarangController::class, 'index']);
Route::get('/ukuran',                           [UkuranController::class, 'index']);
Route::get('/warna',                            [WarnaController::class, 'index']);
Route::get('/barang',                           [BarangController::class, 'index']);
Route::get('/historystock',                     [HistoryStockController::class, 'index']);

//input user baru
Route::post('/createuser',                     [PenggunaController::class, 'create']);
Route::get('/insertuser',                      [PenggunaController::class, 'insert']);
//delete user
Route::delete('/destroyuser/{id}',             [PenggunaController::class, 'destroy']);
//edit user
Route::get('/edituser/{id}',                   [PenggunaController::class, 'edit']);
Route::post('/updateuser/{id}',                [PenggunaController::class, 'update']);

//input jenisbarang baru
Route::post('/createjenisbarang',             [JenisBarangController::class, 'create']);
Route::get('/insertjenisbarang',              [JenisBarangController::class, 'insert']);
//delete jenisbarang
Route::delete('/destroyjenisbarang/{id}',     [JenisBarangController::class, 'destroy']);
//edit jenisbarang
Route::get('/editjenisbarang/{id}',           [JenisBarangController::class, 'edit']);
Route::post('/updatejenisbarang/{id}',        [JenisBarangController::class, 'update']);

//input ukuran baru
Route::post('/createukuran',           [UkuranController::class, 'create']);
Route::get('/insertukuran',            [UkuranController::class, 'insert']);
//delete ukuran
Route::delete('/destroyukuran/{id}',   [UkuranController::class, 'destroy']);
//edit ukuran
Route::get('/editukuran/{id}',         [UkuranController::class, 'edit']);
Route::post('/updateukuran/{id}',      [UkuranController::class, 'update']);

//input warna baru
Route::post('/createwarna',            [WarnaController::class, 'create']);
Route::get('/insertwarna',             [WarnaController::class, 'insert']);
//delete warna
Route::delete('/destroywarna/{id}',    [WarnaController::class, 'destroy']);
//edit warna
Route::get('/editwarna/{id}',          [WarnaController::class, 'edit']);
Route::post('/updatewarna/{id}',       [WarnaController::class, 'update']);

//input barang baru
Route::post('/createbarang',           [BarangController::class, 'create']);
Route::get('/insertbarang',            [BarangController::class, 'insert']);
//delete barang
Route::delete('/destroybarang/{id}',   [BarangController::class, 'destroy']);
//edit barang
Route::get('/editbarang/{id}',         [BarangController::class, 'edit']);
Route::post('/updatebarang/{id}',      [BarangController::class, 'update']);

Route::get('/role',                 [RoleController::class, 'index']);
Route::get('/kota',                 [KotaController::class, 'index']);
Route::get('/supplier',             [SupplierController::class, 'index']);
Route::get('/pemesanan',            [PemesananController::class, 'index']);
Route::get('/pembayaran',           [PembayaranController::class, 'index']);
Route::get('/penerimaan',           [PenerimaanController::class, 'index']);

//input role baru
Route::post('/createrole',            [RoleController::class, 'create']);
Route::get('/insertrole',             [RoleController::class, 'insert']);
//delete role
Route::delete('/destroyrole/{id}',    [RoleController::class, 'destroy']);
//edit role
Route::get('/editrole/{id}',          [RoleController::class, 'edit']);
Route::post('/updaterole/{id}',       [RoleController::class, 'update']);

//input history stock baru
Route::post('/createhistorystock',                     [HistoryStockController::class, 'create']);
Route::get('/inserthistorystock',                      [HistoryStockController::class, 'insert']);
//delete history stock
Route::delete('/destroyhistorystock/{id}',             [HistoryStockController::class, 'destroy']);
//edit history stock
Route::get('/edithistorystock/{id}',                   [HistoryStockController::class, 'edit']);
Route::post('/updatehistorystock/{id}',                [HistoryStockController::class, 'update']);

//input kota baru
Route::post('/createkota',             [KotaController::class, 'create']);
Route::get('/insertkota',              [KotaController::class, 'insert']);
//delete kota
Route::delete('/destroykota/{id}',     [KotaController::class, 'destroy']);
//edit kota
Route::get('/editkota/{id}',          [KotaController::class, 'edit']);
Route::post('/updatekota/{id}',       [KotaController::class, 'update']);

//input supplier baru
Route::post('/createsupplier',         [SupplierController::class, 'create']);
Route::get('/insertsupplier',          [SupplierController::class, 'insert']);
//delete supplier
Route::delete('/destroysupplier/{id}', [SupplierController::class, 'destroy']);
//edit supplier
Route::get('/editsupplier/{id}',       [SupplierController::class, 'edit']);
Route::post('/updatesupplier/{id}',    [SupplierController::class, 'update']);

//input pemesanan baru
Route::post('/createpemesanan',           [PemesananController::class, 'create']);
Route::get('/insertpemesanan',            [PemesananController::class, 'insert']);
//delete pemesanan
Route::delete('/destroypemesanan/{id}',   [PemesananController::class, 'destroy']);
//edit pemesanan
Route::get('/editpemesanan/{id}',       [Pemesanantroller::class, 'edit']);
Route::post('/updatepemesanan/{id}',    [PemesananController::class, 'update']);

//input penerimaan baru
Route::post('/createpenerimaan',           [PenerimaanController::class, 'create']);
Route::get('/insertpenerimaan',            [PenerimaanController::class, 'insert']);
//delete penerimaan
Route::delete('/destroypenerimaan/{id}',   [PenerimaanController::class, 'destroy']);
//edit penerimaan
Route::get('/editpenerimaan/{id}',         [PenerimaanController::class, 'edit']);
Route::post('/updatepenerimaan/{id}',      [PenerimaanController::class, 'update']);

//input pembayaran baru
Route::post('/createpembayaran',           [PembayaranController::class, 'create']);
Route::get('/insertpembayaran',            [PembayaranController::class, 'insert']);
//delete pembayaran
Route::delete('/destroypembayaran/{id}',   [PembayaranController::class, 'destroy']);
//edit pembayaran
Route::get('/editpembayaran/{id}',         [PembayaranController::class, 'edit']);
Route::post('/updatepembayaran/{id}',      [PembayaranController::class, 'update']);

//PEMILIK
Route::get('/pemilik',                  [PemilikController::class, 'index']);
Route::get('/pemilikpengecekan',        [PengecekanPemilikController::class, 'index']);
Route::get('/pemilikpemesanan',         [PemesananPemilikController::class, 'index']);
Route::get('/pemilikpembayaran',        [PembayaranPemilikController::class, 'index']);