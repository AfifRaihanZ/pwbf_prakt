<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemesanan;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = Pemesanan::all();
        return view ('master.pemesanan', ['pemesanan'=>$pemesanan]);
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

        return redirect('pemesanan');
    }

    public function destroy($id){
        $item = Pemesanan::find($id);
        $item->delete();
        return redirect('pemesanan');
    }
}