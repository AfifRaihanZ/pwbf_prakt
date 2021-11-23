<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_Barang;

class Jenis_BarangController extends Controller
{
    public function index()
    {
        $jenis_barang = Jenis_Barang::all();
        return view ('master.jenisbarang', ['jenis_barang'=>$jenis_barang]);
    }

    public  function insert()
    {
        return view('insertjenisbarang');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $jenisbarang = new Jenis_Barang;
        
        $jenisbarang->jenis_barang       = $data['jenis_barang'];
        $jenisbarang->save();

        return redirect('jenisbarang');
    }

    public function destroy($id){
        $item = Jenis_Barang::find($id);
        $item->delete();
        return redirect('jenisbarang');
    }

    public function edit($id) 
    {
        return view('editjenisbarang', [
            'post' => $id,
            'categories' => Jenis_Barang::all()
        ]);
        
        // $jenis_barang = Jenis_Barang::findorfail($id);
        // return view('edit_jenis_barang');
    }

    public function update(Request $request, $id)
    {
        $data = $request->input();

        $jenisbarang = $id;

        $jenisbarang->jenis_barang       = $data['jenis_barang'];
        $jenisbarang->save();
        
            return redirect('/jenisbarang')->with('sukses, jenis barang berhasil diupdate');
    }

}