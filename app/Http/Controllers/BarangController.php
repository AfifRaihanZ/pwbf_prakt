<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::all();
        return view ('master.barang', ['barang'=>$barang]);
    }

    public  function insert()
    {
        return view('insertbarang');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $barang = new Barang;
        
        $barang->id_jb          = $data['id_jb'];
        $barang->nama_bar       = $data['nama_bar'];
        $barang->stock_bar      = $data['stock_bar'];
        $barang->harga_beli_bar = $data['harga_beli_bar'];
        $barang->harga_jual_bar = $data['harga_jual_bar'];
        $barang->save();

        return redirect('barang');
    }

    public function destroy($id){
        $item = Barang::find($id);
        $item->delete();
        return redirect('barang');
    }
}