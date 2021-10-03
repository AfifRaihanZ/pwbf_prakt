<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warna;

class WarnaController extends Controller
{
    public function index()
    {
        $warna = Warna::all();
        return view ('warna', ['warna'=>$warna]);
    }
}