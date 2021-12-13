<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index()
    {
        $supplier = Supplier::all();
        return view ('master.supplier', ['supplier'=>$supplier]);
    }

    public  function insert()
    {
        return view('insertsupplier');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $supplier = new Supplier;
        
        $supplier->id_kota     = $data['id_kota'];
        $supplier->nama_sup     = $data['nama_sup'];
        $supplier->alamat_sup   = $data['alamat_sup'];
        $supplier->telp_sup     = $data['telp_sup'];
        $supplier->save();

        return redirect('supplier')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $supplier = Supplier::find($id);
        return view('edit.supplier', ['supplier' => $supplier]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_kota'       => 'required',
            'nama_sup'      => 'required',
            'alamat_sup'    => 'required',
            'telp_sup'      => 'required'
        ]);

        $supplier = Supplier::find($id);

        $supplier = new Supplier;
        $supplier->id_kota      = $request->input('id_kota');
        $supplier->nama_sup     = $request->input('nama_sup');
        $supplier->alamat_sup   = $request->input('alamat_sup');
        $supplier->telp_sup     = $request->input('telp_sup');
        $supplier->save();

        return redirect('supplier');
    }

    public function destroy($id){
        $item = Supplier::find($id);
        $item->delete();
        return redirect('supplier')->with('sukses','Data berhasil dihapus');
    }
}