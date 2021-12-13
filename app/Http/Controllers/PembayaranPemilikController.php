<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pembayaran;

class PembayaranPemilikController extends Controller
{
    public function index()
    {
        $pembayaran = Pembayaran::all();
        return view ('pemilik.pembayaranpemilik', ['pembayaran'=>$pembayaran]);
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

    public function destroy($id){
        $item = Pembayaran::find($id);
        $item->delete();
        return redirect('pembayaran')->with('sukses','Data berhasil dihapus');
    }
}