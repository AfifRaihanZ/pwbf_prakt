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

    public  function insert()
    {
        return view('insertukuran');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $ukuran = new Ukuran;
        
        $ukuran->ukuran = $data['ukuran'];
        $ukuran->save();

        return redirect('ukuran')->with('sukses','Data berhasil diinput');
    }

    public function destroy($id){
        $item = Ukuran::find($id);
        $item->delete();
        return redirect('ukuran')->with('sukses','Data berhasil dihapus');
    }
}