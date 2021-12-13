<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::all();
        return view ('master.kota', ['kota'=>$kota]);
    }

    public  function insert()
    {
        return view('insertkota');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $kota = new Kota;
        
        $kota->id_user       = $data['id_user'];
        $kota->kota          = $data['kota'];
        $kota->save();

        return redirect('kota')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $kota = Kota::find($id);
        return view('edit.kota', ['kota' => $kota]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'jenis_barang'      => 'required'
        ]);
        $kota = Kota::find($id);
        $kota= new Kota;
        $kota->jenis_barang    = $request->input('jenis_barang');
        $kota->save();

        return redirect('kota');
    }

    public function destroy($id){
        $item = Kota::find($id);
        $item->delete();
        return redirect('kota')->with('sukses','Data berhasil dihapus');
    }
}