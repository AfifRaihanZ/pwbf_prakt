<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();
        return view ('master.pengguna', ['user'=>$pengguna]);
    }

    public  function insert()
    {
        return view('insertuser');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $user = new Pengguna;
        
        $user->nama_user        = $data['nama_user'];
        $user->alamat_user      = $data['alamat_user'];
        $user->telp_user        = $data['telp_user'];
        $user->username         = $data['username'];
        $user->password         = $data['password'];
        $user->save();

        return redirect('pengguna');
    }

    public function destroy($id){
        $item = Pengguna::find($id);
        $item->delete();
        return redirect('pengguna');
    }
}