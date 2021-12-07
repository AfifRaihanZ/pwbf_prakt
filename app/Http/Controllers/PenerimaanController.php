<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penerimaan;

class PenerimaanController extends Controller
{
    public function index()
    {
        $penerimaan = Penerimaan::all();
        return view ('transaksi.penerimaan', ['penerimaan'=>$penerimaan]);
    }

    public  function insert()
    {
        return view('insertpenerimaan');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $penerimaan = new Penerimaan;
        
        $penerimaan->id_sup         = $data['id_sup'];
        $penerimaan->id_user        = $data['id_user'];
        $penerimaan->tgl_trima      = $data['tgl_trima'];
        $penerimaan->total_harga    = $data['total_harga'];
        $penerimaan->status_trima   = $data['status_trima'];
        $penerimaan->save();

        return redirect('penerimaan')->with('sukses','Data berhasil diinput');
    }

    public function destroy($id){
        $item = Penerimaan::find($id);
        $item->delete();
        return redirect('penerimaan')->with('sukses','Data berhasil dihapus');
    }
}