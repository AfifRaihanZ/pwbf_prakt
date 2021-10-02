<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerimaan;

class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaan = Penerimaan::all();
        return view ('penerimaan', ['penerimaan'=>$penerimaan]);
    }
}