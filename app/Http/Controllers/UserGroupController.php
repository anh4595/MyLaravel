<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\usergroups;

class UserGroupController extends Controller
{
    public function Home()
    {
        return view('admin.user.usergroup');
    }

    public function getUserGroup()
    {
        return view('admin.user.addusergroup');
    }

    public function postUserGroup(Request $request)
    {
        $this->validate($request,
            [
				'id' => 'required|unique:usergroups,id',
				'name'=> 'required|unique:usergroups,name',
			],
            [
				'id.required' => "Vui lòng nhập mã code",
				'id.unique' => "Mã code đã tồn tại",
				'name.required' => "Vui lòng nhập tên nhóm người dùng",
				'name.unique' => "Nhóm người dùng đã tồn tại",
			]);

        $usergroup = new usergroups();
		$usergroup->id = $request->id;
		$usergroup->name = $request->name;
		if (isset($_POST['submit'])) 
		        {
			if(isset($_POST['status']))
			            {
				$usergroup->status = $_POST['status'];
			}
		}
		$usergroup->save();
		return redirect()->route('admin.user.usergroup');
    }

    public function changeStatus($id)
	{
		$usergroup=usergroups::find($id);
		if($usergroup->status != 1)
		{
			$usergroup->status = 1;
			$usergroup->save();
		}
		else
		{
			$usergroup->status = 0;
			$usergroup->save();
		}
		return redirect()->route('admin.user.usergroup');
	}

    public function getDelete($id)
    {
        $usergroup = usergroups::find($id);
        $usergroup->delete($id);
        return redirect()->route('admin.user.usergroup');
    }

    public function getEdit($id)
    {
        $usergroup = UserGroups::find($id);
        return view('admin.user.editusergroup',compact('usergroup'));
    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            [
				'id' => 'required|unique:usergroups,id',
				'name'=> 'required|unique:usergroups,name',
			],
            [
				'id.required' => "Vui lòng nhập mã code",
				'id.unique' => "Mã code đã tồn tại",
				'name.required' => "Vui lòng nhập tên nhóm người dùng",
				'name.unique' => "Nhóm người dùng đã tồn tại",
			]);

        $usergroup = UserGroups::find($id);
		$usergroup->name = $request->name;
		$usergroup->save();
		return redirect()->route('admin.user.usergroup');
    }

	public function autocomplete(Request $request)
    {
        $term=$request->term;
        $data = DB::table('products')->where('name','LIKE','%'.$term.'%')->take(6)->get();
        $result=array();
        foreach ($data as $key => $v)
		{
			$result[]=['value' =>$value->name];
		}
		return response()->json($results);
	}

}
