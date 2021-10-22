<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendataan;

class PendataanController extends Controller
{
    public function index()
    {
        $jenis_barang = Pendataan::all();
        return view ('pegawai.pendataanpegawai', ['jenis_barang'=>$jenis_barang]);
    }
}