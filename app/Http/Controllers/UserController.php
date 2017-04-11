<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UserRequest;

use App\user;
use App\UserGroups;
use Hash;

class UserController extends Controller
{

	public function HomeAdmin()
	{
        return view('admin.index');
    }

	public function Home()
	{
		return view('admin.user.user');
	}
	
	public function getUser()
	{
		return view('admin.user.adduser');
	}

	public function getDelete($id)
    {
        $user = user::find($id);
        $user->delete($id);
        return redirect()->route('admin.user.user');
    }

    public function getEdit($id)
    {
        $parent = UserGroups::select('id','name')->get()->toArray();
        $user = User::find($id);
        return view('admin.user.edituser',compact('parent','user','id'));

    }

    public function postEdit(Request $request,$id)
    {
        $this->validate($request,
            [
				'username' => 'required|unique:users,username',
				'password'=> 'required',
				'repassword' => 'required|same:password',
				'email' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
			],
            [
				'username.required' => "Vui lòng nhập tên người dùng",
				'username.unique' => "Tên người dùng đã tồn tại",
				'password.required' => "Vui lòng nhập mật khẩu",
				'repassword.required' => "Vui lòng nhập lại mật khẩu",
				'repassword.same' => "Mật khẩu không trùng khớp",
				'email.required' => "Vui lòng nhập địa chỉ email",
				'email.regex' => "Sai định dạng email"
			]);

        $user = User::find($id);
      	$user->name = $request->name;
		$user->phone = $request->phone;
		$user->email = $request->email;
		$user->username = $request->username;
		$user->password = Hash::make($request->password);
		$user->createdby = $request->createby;
		$user->updatedby = $request->updateby;
		$user->group_id = $request->group_id;
		$user->remember_token = $request->_token;
		if (isset($_POST['submit'])) 
		        {
			if(isset($_POST['status']))
			            {
				$user->status = $_POST['status'];
			}
		}
		$user->save();
		return redirect()->route('admin.user.user');
    }

	public function changeStatus($id)
	{
		$user=user::find($id);
		if($user->status != 1)
		        {
			$user->status = 1;
			$user->save();
		}
		else
		        {
			$user->status = 0;
			$user->save();
		}
		return redirect()->route('admin.user.user');
	}

	public function postUser(Request $request)
	{
		$this->validate($request,
            [
				'username' => 'required|unique:users,username',
				'password'=> 'required',
				'repassword' => 'required|same:password',
				'email' => 'required|regex:/^[a-z][a-z0-9]*(_[a-z0-9]+)*(\.[a-z0-9]+)*@[a-z0-9]([a-z0-9-][a-z0-9]+)*(\.[a-z]{2,4}){1,2}$/'
			],
            [
				'username.required' => "Vui lòng nhập tên người dùng",
				'username.unique' => "Tên người dùng đã tồn tại",
				'password.required' => "Vui lòng nhập mật khẩu",
				'repassword.required' => "Vui lòng nhập lại mật khẩu",
				'repassword.same' => "Mật khẩu không trùng khớp",
				'email.required' => "Vui lòng nhập địa chỉ email",
				'email.regex' => "Sai định sang email"
			]);

		$user = new user();
		$user->name = $request->name;
		$user->phone = $request->phone;
		$user->email = $request->email;
		$user->username = $request->username;
		$user->password = Hash::make($request->password);
		$user->createdby = $request->createby;
		$user->updatedby = $request->updateby;
		$user->group_id = $request->group_id;
		$user->remember_token = $request->_token;
		$user->save();
		return redirect()->route('admin.user.user');
	}

	public function getLoginAdmin()
	{
		if(!Auth::check())
		{
			return view('admin.login.login');
		}
		else
		{
			return view('admin.index');
		}
	}

	public function postLoginAdmin(UserRequest $request)
    {
		$login = [
			'username' => $request->username,
			'password' => $request->password,
			'status' => 1
		];

    	if(Auth::attempt($login))
		{
    		return redirect()->route('admin.index');
    	}
		else
		{
    		return redirect()->back();
    	}
    }

	public function postLogoutAdmin()
	{
		Auth::logout();
		return redirect('admin/login');
	}
}
