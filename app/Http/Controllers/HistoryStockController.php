<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HistoryStock;

class HistoryStockController extends Controller
{
    public function index()
    {
        $history_stock = HistoryStock::all();
        return view ('master.historystock', ['history_stock'=>$history_stock]);
    }

    public  function insert()
    {
        return view('inserthistorystock');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $history_stock = new HistoryStock;
        
        $history_stock->tgl_hs              = $data['tgl_hs'];
        $history_stock->update_stock_hs     = $data['update_stock_hs'];
        $history_stock->status_hs           = $data['status_hs'];
        $history_stock->save();

        return redirect('historystock')->with('sukses','Data berhasil diinput');
    }

    public function destroy($id){
        $item = HistoryStock::find($id);
        $item->delete();
        return redirect('historystock')->with('sukses','Data berhasil dihapus');
    }
}