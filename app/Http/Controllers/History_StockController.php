<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History_Stock;

class History_StockController extends Controller
{
    public function index()
    {
        $history_stock = History_Stock::all();
        return view ('master.historystock', ['history_stock'=>$history_stock]);
    }

    public  function insert()
    {
        return view('inserthistorystock');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $history_stock = new History_Stock;
        
        $history_stock->tgl_hs              = $data['tgl_hs'];
        $history_stock->update_stock_hs     = $data['update_stock_hs'];
        $history_stock->status_hs           = $data['status_hs'];
        $history_stock->save();

        return redirect('historystock');
    }

    public function destroy($id){
        $item = History_Stock::find($id);
        $item->delete();
        return redirect('historystock');
    }
}