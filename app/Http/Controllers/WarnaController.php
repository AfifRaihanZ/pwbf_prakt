<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warna;

class WarnaController extends Controller
{
    public function index()
    {
        $warna = Warna::all();
        return view ('master.warna', ['warna'=>$warna]);
    }

    public  function insert()
    {
        $warna = Warna::all();
        return view('insertwarna',['$warna'=>$warna]);
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $warna = new Warna;
        
        $warna->id_warna    = $data['id_warna'];
        $warna->warna       = $data['warna'];
        $warna->save();

        return redirect('warna');
    }
}