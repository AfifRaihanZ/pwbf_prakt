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

    public function edit($id){
        $penerimaan = Penerimaan::find($id);
        return view('edit.penerimaan', ['penerimaan' => $penerimaan]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_sup'        => 'required',
            'id_user'       => 'required',
            'tgl_trima'     => 'required',
            'total_harga'   => 'required',
            'status_trima'  => 'required'
        ]);

        $penerimaan = Penerimaan::find($id);

        $penerimaan = new Penerimaan;
        $penerimaan->id_sup         = $request->input('id_sup');
        $penerimaan->id_user        = $request->input('id_user');
        $penerimaan->tgl_trima      = $request->input('tgl_trima');
        $penerimaan->total_harga    = $request->input('total_harga');
        $penerimaan->status_trima   = $request->input('status_trima');
        $penerimaan->ve();

        return redirect('penerimaan');
    }

    public function destroy($id){
        $item = Penerimaan::find($id);
        $item->delete();
        return redirect('penerimaan')->with('sukses','Data berhasil dihapus');
    }
}