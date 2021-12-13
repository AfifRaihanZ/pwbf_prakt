<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisBarang;

class JenisBarangController extends Controller
{
    public function index()
    {
        $jenis_barang = JenisBarang::all();
        return view ('master.jenisbarang', ['jenis_barang'=>$jenis_barang]);
    }

    public  function insert()
    {
        return view('insert.jenisbarang');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $jenisbarang = new JenisBarang;
        
        $jenisbarang->jenis_barang       = $data['jenis_barang'];
        $jenisbarang->save();

        return redirect('jenisbarang')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $jenisbarang = JenisBarang::find($id);
        return view('edit.jenisbarang', ['jenisbarang' => $jenisbarang]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'jenis_barang'      => 'required'
        ]);
        $jenisbarang = JenisBarang::find($id);
        $jenisbarang= new JenisBarang;
        $jenisbarang->jenis_barang    = $request->input('jenis_barang');
        $jenisbarang->save();

        return redirect('jenisbarang');
    }

    public function destroy($id){
        $item = JenisBarang::find($id);
        $item->delete();
        return redirect('jenisbarang');
    }

    //menghitung baris dinamis untuk dashboard
    public function count_item(){
        $this->ci->load->model('item_m');
        return $this->ci->item_m->get();
    }
}