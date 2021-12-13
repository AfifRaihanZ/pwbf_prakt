<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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
        return view('insert.user');
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

        return redirect('pengguna')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $user = Pengguna::find($id);
        return view('edit.user', ['user' => $user]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'nama_user'     => 'required',
            'alamat_user'   => 'required',
            'telp_user'     => 'required',
            'username'      => 'required',
            'password'      => 'required'
        ]);

        $user = Pengguna::find($id);

        $user = new Pengguna;
        $user->nama_user    = $request->input('nama_user');
        $user->alamat_user  = $request->input('alamat_user');
        $user->telp_user    = $request->input('telp_user');
        $user->username     = $request->input('username');
        $user->password     = $request->input('password');
        $user->save();

        return redirect('pengguna');
    }

    // public function update(Request $request, $id){
    //     $user = Pengguna::find($id);
    //     $user->update($request->all());
    //     return redirect('pengguna')->with('sukses','Data berhasil di Update');
    // }

    // public function edit(Pengguna $user){
    //     return view('edit.user', compact('user'));
    // }

    // public function update(Request $request, Pengguna $user){
    //     $user->update($request->all());
    //     return redirect('master.pengguna')->with('sukses','Data berhasil di Update');
    // }

    public function destroy($id){
        $item = Pengguna::find($id);
        $item->delete();
        return redirect('pengguna')->with('sukses','Data berhasil dihapus');
    }
}