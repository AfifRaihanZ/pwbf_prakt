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

        return redirect('supplier');
    }

    public function destroy($id){
        $item = Supplier::find($id);
        $item->delete();
        return redirect('supplier');
    }
}