<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PemesananPegawai;

class PemesananPegawaiController extends Controller
{
    public function index()
    {

        $pemesanan = PemesananPegawai::all();
        return view ('pegawai.pemesananpegawai', ['pemesanan'=>$pemesanan]);
    }
}