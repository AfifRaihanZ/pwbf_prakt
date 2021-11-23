<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class   PemilikPemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view ('pemilik.pemesanan', ['pemesanan'=>$pemesanan]);
    }
}