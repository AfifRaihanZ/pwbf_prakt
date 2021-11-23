<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

use App\Http\Controllers\PemilikController;
use App\Http\Controllers\Pengecekan_PemilikController;
use App\Http\Controllers\Pemesanan_PemilikController;

use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\Pendataan_PegawaiController;
use App\Http\Controllers\Pemesanan_PegawaiController;

use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\Jenis_BarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\History_StockController;
use App\Http\Controllers\Detail_BarangController;
use App\Http\Controllers\PemesananController;
use App\Http\Controllers\PenerimaanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\Detail_PemesananController;
use App\Http\Controllers\Detail_PenerimaanController;

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

Route::get('/dashboard', function () {
    return view('home');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authentication']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);

//tabel master
Route::get('/pengguna',             [PenggunaController::class, 'index']);
Route::get('/jenisbarang',          [Jenis_BarangController::class, 'index']);
Route::get('/ukuran',               [UkuranController::class, 'index']);
Route::get('/warna',                [WarnaController::class, 'index']);
Route::get('/kota',                 [KotaController::class, 'index']);
Route::get('/role',                 [RoleController::class, 'index']);
Route::get('/supplier',             [SupplierController::class, 'index']);
Route::get('/barang',               [BarangController::class, 'index']);
Route::get('/historystock',         [History_StockController::class, 'index']);
Route::get('/detailbarang',         [Detail_BarangController::class, 'index']);
Route::get('/pemesanan',            [PemesananController::class, 'index']);
Route::get('/penerimaan',           [PenerimaanController::class, 'index']);
Route::get('/pembayaran',           [PembayaranController::class, 'index']);
Route::get('/detailpemesanan',      [Detail_PemesananController::class, 'index']);
Route::get('/detailpenerimaan',     [Detail_PenerimaanController::class, 'index']);

//input user baru
Route::post('/create_user',                     [PenggunaController::class, 'create']);
Route::get('/insert_user',                      [PenggunaController::class, 'insert']);
//delete user
Route::delete('/destroy_pengguna/{id}',             [PenggunaController::class, 'destroy']);

//input jenisbarang baru
Route::post('/create_jenis_barang',             [Jenis_BarangController::class, 'create']);
Route::get('/insert_jenis_barang',              [Jenis_BarangController::class, 'insert']);
//edit jenisbarang
Route::post('/edit_jenis_barang',          [Jenis_BarangController::class, 'create']);
Route::post('/edit_jenis_barang/{id}',          [Jenis_BarangController::class, 'edit']);

//delete jenisbarang
Route::delete('/destroy_jenis_barang/{id}',     [Jenis_BarangController::class, 'destroy']);

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

//input kota baru
Route::post('/create_kota',             [KotaController::class, 'create']);
Route::get('/insert_kota',              [KotaController::class, 'insert']);
//delete kota
Route::delete('/destroy_kota/{id}',     [KotaController::class, 'destroy']);

//input role baru
Route::post('/create_role',             [KotaController::class, 'create']);
Route::get('/insert_role',              [KotaController::class, 'insert']);
//delete role
Route::delete('/destroy_role/{id}',     [KotaController::class, 'destroy']);

//input supplier baru
Route::post('/create_supplier',         [SupplierController::class, 'create']);
Route::get('/insert_supplier',          [SupplierController::class, 'insert']);
//delete supplier
Route::delete('/destroy_supplier/{id}', [SupplierController::class, 'destroy']);

//input barang baru
Route::post('/create_barang',           [BarangController::class, 'create']);
Route::get('/insert_barang',            [BarangController::class, 'insert']);
//delete barang
Route::delete('/destroy_barang/{id}',   [BarangController::class, 'destroy']);

//input history stock baru
Route::post('/create_history_stock',           [History_StockController::class, 'create']);
Route::get('/insert_history_stock',            [History_StockController::class, 'insert']);
//delete history stock
Route::delete('/destroy_history_stock/{id}',   [History_StockController::class, 'destroy']);

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

//input pembayaran baru
Route::post('/create_pembayaran',           [PembayaranController::class, 'create']);
Route::get('/insert_pembayaran',            [PembayaranController::class, 'insert']);
//delete pembayaran
Route::delete('/destroy_pembayaran/{id}',   [PembayaranController::class, 'destroy']);


//input detail barang baru
Route::post('/create_detail_barang',        [Detail_BarangController::class, 'create']);
Route::get('/insert_detail_barang',         [Detail_BarangController::class, 'insert']);

//input detail pemesanan baru
Route::post('/create_detail_pemesanan',     [Detail_PemesananController::class, 'create']);
Route::get('/insert_detail_pemesanan',      [Detail_PemesananController::class, 'insert']);

//input detail penerimaan baru
Route::post('/create_detail_penerimaan',    [Detail_PenerimaanController::class, 'create']);
Route::get('/insert_detail_penerimaan',     [Detail_PenerimaanController::class, 'insert']);


Route::get('/pegawai',              [PegawaiController::class, 'index']);
Route::get('/pegawai/pendataan',    [Pendataan_PegawaiController::class, 'index']);
Route::get('/pegawai/pemesanan',    [Pemesanan_PegawaiController::class, 'index']);
Route::get('/pegawai/penerimaan',   [Penerimaan_PegawaiController::class, 'index']);

Route::get('/pemilik',              [PemilikController::class, 'index']);
Route::get('/pemilik/pengecekan',   [Pengecekan_PemilikController::class, 'index']);
Route::get('/pemilik/pemesanan',    [Pemesanan_PemilikController::class, 'index']);
Route::get('/pemilik/pembayaran',   [Pembayaran_PemilikController::class, 'index']);
