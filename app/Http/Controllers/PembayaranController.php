<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view ('transaksi.pembayaran', ['pembayaran'=>$pembayaran]);
    }

    public  function insert()
    {
        return view('insertpembayaran');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $pembayaran = new Pembayaran;
        
        $pembayaran->id_trima        = $data['id_trima'];
        $pembayaran->tgl_bayar       = $data['tgl_bayar'];
        $pembayaran->total_bayar     = $data['total_bayar'];
        $pembayaran->save();

        return redirect('pembayaran')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $pembayaran = Pembayaran::find($id);
        return view('edit.pembayaran', ['pembayaran' => $pembayaran]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_trima'      => 'required',
            'tgl_bayar'     => 'required',
            'total_bayar'   => 'required'
        ]);

        $pembayaran = Pembayaran::find($id);

        $pembayaran = new Pembayaran;
        $pembayaran->id_trima       = $request->input('id_trima');
        $pembayaran->tgl_bayar      = $request->input('tgl_bayar');
        $pembayaran->total_bayar    = $request->input('total_bayar');
        $pembayaran->save();

        return redirect('pembayaran');
    }

    public function destroy($id){
        $item = Pembayaran::find($id);
        $item->delete();
        return redirect('pembayaran')->with('sukses','Data berhasil dihapus');
    }
}