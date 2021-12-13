<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warna;

class WarnaController extends Controller
{
    public function index()
    {
        $warna = Warna::all();
        return view ('master.warna', ['warna'=>$warna]);
    }

    public  function insert()
    {
        return view('insertwarna');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $warna = new Warna;
        
        $warna->warna       = $data['warna'];
        $warna->save();

        return redirect('warna')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $warna = Warna::find($id);
        return view('edit.warna', ['warna' => $warna]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'warna' => 'required'
        ]);

        $warna = Warna::find($id);

        $warna = new Warna;
        $warna->warna    = $request->input('warna');
        $warna->save();

        return redirect('warna');
    }

    // public function update(Request $request, Warna $warna)
    // {
    //     dd($warna->all());
    //     // $warna=Warna::find($warna);
    //     // $warna->update($request->all());
    //     // return redirect('master.warna')->with('sukses','Data berhasil di Update');
    // }

    public function destroy($id){
        $item = Warna::find($id);
        $item->delete();
        return redirect('warna')->with('sukses1','Data berhasil dihapus');
    }
}