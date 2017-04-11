<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\credentials;


class PermissionController extends Controller
{
    public function Home()
    {
        return view('admin.role.permission');
    }

    public function getPermission()
    {
        return view('admin.role.addpermission');
    }

    public function postPermission(Request $request)
    {  
        if(!empty($_POST['role']))
        {
            $count_lenght = count($_POST['role']);
            for($i=0;$i<$count_lenght;$i++)
            {
                $cre = new credentials();
                $cre->usergroup_id=$request->group_id;
                $cre->role_id = $_POST['role'][$i];  
                $cre->status=0;
                $cre->save(); 
            }
        }
        return redirect()->route('admin.role.permission');
    }

    public function changeStatus($id)
    {
        $cre=credentials::find($id);
        if($cre->status != 1)
        {
            $cre->status = 1;
            $cre->save();
        }
        else
        {
            $cre->status = 0;
            $cre->save();
        }
        return redirect()->route('admin.role.permission');
    }

    public function getDelete($id)
    {
        $cre = credentials::find($id);
        $cre->delete($id);
        return redirect()->route('admin.role.permission');
    }

}
