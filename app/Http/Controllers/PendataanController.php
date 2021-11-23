<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class PendataanController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view ('pegawai.pendataanpegawai', ['barang'=>$barang]);
    }
}