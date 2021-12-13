<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return view ('master.role', ['role'=>$role]);
    }

    public  function insert()
    {
        return view('insertrole');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $role = new Role;

        $role->id_user     = $data['id_user'];
        $role->jenis_role   = $data['jenis_role'];
        $role->save();

        return redirect('role')->with('sukses','Data berhasil diinput');
    }

    public function edit($id){
        $role = Role::find($id);
        return view('edit.role', ['role' => $role]);
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'id_user'     => 'required',
            'jenis_role'   => 'required'
        ]);

        $role = Role::find($id);

        $role = new Role;
        $role->id_user      = $request->input('id_user');
        $role->jenis_role   = $request->input('jenis_role');
        $role->save();

        return redirect('role');
    }

    public function destroy($id){
        $item = Role::find($id);
        $item->delete();
        return redirect('role')->with('sukses','Data berhasil dihapus');
    }
}