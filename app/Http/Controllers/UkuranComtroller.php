<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ukuran;

class UkuranController extends Controller
{
    public function index()
    {
        $ukuran = Ukuran::all();
        return view ('master.ukuran', ['ukuran'=>$ukuran]);
    }
}