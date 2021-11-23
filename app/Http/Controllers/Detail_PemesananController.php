<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail_Pemesanan;

class Detail_PemesananController extends Controller
{
    public function index()
    {
        $detail_pemesanan = Detail_Pemesanan::all();
        return view ('master.detailpemesanan', ['detail_pemesanan'=>$detail_pemesanan]);
    }

    public  function insert()
    {
        return view('insertdetailpemesanan');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $detail_pemesanan = new Detail_Pemesanan;
        
        $detail_pemesanan->id_bar      = $data['id_bar'];
        $detail_pemesanan->id_pesan    = $data['id_pesan'];
        $detail_pemesanan->jumlah_up   = $data['jumlah_up'];
        $detail_pemesanan->harga_up    = $data['harga_up'];
        $detail_pemesanan->save();

        return redirect('detailpemesanan');
    }

    public function destroy($id){
        $item = Detail_Pemesanan::find($id);
        $item->delete();
        return redirect('detailpemesanan');
    }
}
