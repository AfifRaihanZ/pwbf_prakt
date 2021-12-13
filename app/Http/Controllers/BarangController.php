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
        return view('insert.barang');
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

        return redirect('barang')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $barang = Barang::find($id);
        return view('edit.barang', ['barang' => $barang]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_jb'             => 'required',
            'nama_bar'          => 'required',
            'stock_bar'         => 'required',
            'harga_beli_bar'    => 'required',
            'harga_jual_bar'    => 'required'
        ]);
        $barang = Barang::find($id);
        $barang = new Barang;
        $barang->id_jb            = $request->input('id_jb');
        $barang->nama_bar         = $request->input('nama_bar');
        $barang->stock_bar        = $request->input('stock_bar');
        $barang->harga_beli_bar   = $request->input('harga_beli_bar');
        $barang->harga_jual_bar   = $request->input('harga_jual_bar');
        $barang->save();

        return redirect('barang');
    }

    public function destroy($id){
        $item = Barang::find($id);
        $item->delete();
        return redirect('barang')->with('sukses','Data berhasil dihapus');
    }
}