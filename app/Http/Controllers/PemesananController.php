<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view ('transaksi.pemesanan', ['pemesanan'=>$pemesanan]);
    }

    public  function insert()
    {
        return view('insertpemesanan');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $pemesanan = new Pemesanan;
        
        $pemesanan->id_sup          = $data['id_sup'];
        $pemesanan->id_user         = $data['id_user'];
        $pemesanan->tgl_pesan       = $data['tgl_pesan'];
        $pemesanan->status_pesan    = $data['status_pesan'];
        $pemesanan->save();

        return redirect('pemesanan')->with('sukses','Data berhasil diinput');;
    }

    public function edit($id){
        $pemesanan = Pemesanan::find($id);
        return view('edit.pemesanan', ['pemesanan' => $pemesanan]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_sup'        => 'required',
            'id_user'       => 'required',
            'tgl_pesan'     => 'required',
            'status_pesan'  => 'required'
        ]);

        $pemesanan = Pemesanan::find($id);

        $pemesanan = new Pemesanan;
        $pemesanan->id_sup          = $request->input('id_sup');
        $pemesanan->id_user         = $request->input('id_user');
        $pemesanan->tgl_pesan       = $request->input('tgl_pesan');
        $pemesanan->status_pesan    = $request->input('status_pesan');
        $pemesanan->save();

        return redirect('pemesanan');
    }

    public function destroy($id){
        $item = Pemesanan::find($id);
        $item->delete();
        return redirect('pemesanan')->with('sukses','Data berhasil dihapus');
    }
}