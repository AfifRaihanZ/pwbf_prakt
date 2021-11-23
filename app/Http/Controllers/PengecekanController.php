<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class PengecekanController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view ('pemilik.pengecekan', ['barang'=>$barang]);
    }
}