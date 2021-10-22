<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Barang;

class Jenis_BarangController extends Controller
{
    public function index()
    {
        $jenis_barang = Jenis_Barang::all();
        return view ('master.jenisbarang', ['jenis_barang'=>$jenis_barang]);
    }
}