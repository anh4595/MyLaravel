<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RoleRequest;
use App\roles;

class RoleController extends Controller
{
    public function Home()
    {
        return view('admin.role.role');
    }

    public function getRole()
    {
        return view('admin.role.addrole');
    }

    public function postRole(RoleRequest $request)
    {
        $role = new roles();
        $role->id = $request->id_role;
        $role->name = $request->name_role;
        $role->save();
        return redirect()->route('admin.role.role');
    }

    public function getDelete($id)
    {
        $role = roles::find($id);
        $role->delete($id);
        return redirect()->route('admin.role.role');
    }
}
