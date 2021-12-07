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
        return view('insertjenisbarang');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $jenisbarang = new JenisBarang;
        
        $jenisbarang->jenis_barang       = $data['jenis_barang'];
        $jenisbarang->save();

        return redirect('jenisbarang')->with('sukses','Data berhasil diinput');
    }

    public function destroy($id){
        $item = JenisBarang::find($id);
        $item->delete();
        return redirect('jenisbarang');
    }

    public function edit($id) 
    {
        $jenis_barang = JenisBarang::findorfail($id);
        return view('editjenisbarang')->with('sukses','Data berhasil dihapus');
    }

    public function count_item(){
        $this->ci->load->model('item_m');
        return $this->ci->item_m->get();
    }
}