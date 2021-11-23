<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class KotaController extends Controller
{
    public function index()
    {
        $kota = Kota::all();
        return view ('master.kota', ['kota'=>$kota]);
    }

    public  function insert()
    {
        return view('insertkota');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $kota = new Kota;
        
        $kota->id_user       = $data['id_user'];
        $kota->kota          = $data['kota'];
        $kota->save();

        return redirect('kota');
    }

    public function destroy($id){
        $item = Kota::find($id);
        $item->delete();
        return redirect('kota');
    }
}