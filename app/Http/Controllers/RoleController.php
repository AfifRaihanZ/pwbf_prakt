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

        $role->jid_user     = $data['id_user'];
        $role->jenis_role   = $data['jenis_role'];
        $role->save();

        return redirect('role');
    }

    public function destroy($id){
        $item = Role::find($id);
        $item->delete();
        return redirect('role');
    }
}