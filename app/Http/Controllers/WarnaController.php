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
        return view('insertwarna');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $warna = new Warna;
        
        $warna->warna       = $data['warna'];
        $warna->save();

        return redirect('warna')->with('sukses','Data berhasil diinput');
    }

    public function destroy($id){
        $item = Warna::find($id);
        $item->delete();
        return redirect('warna')->with('sukses','Data berhasil dihapus');
    }
}