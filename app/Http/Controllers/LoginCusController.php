<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CustomerRequest;
use Illuminate\Support\Facades\Auth;
use App\customers;
use Hash;
use Cart;

class LoginCusController extends Controller
{
    public function Homeclient()
    {
        return view('client.index');
    }
    
    public function HomeLogin()
    {
        return view('client.login.login');
    }

    public function getLogin()
	{
		if(!Auth::guard('customer')->check())
		{
			return view('client.login.login');
		}
		else
		{
			return view('/');
		}
	}

	public function postLogin(Request $request)
    {
		$login = [
			'username' => $request->username_login,
			'password' => $request->password_login,
			'status' => 1
		];

    	if(Auth::guard('customer')->attempt($login))
		{
    		return redirect()->route('client.index');
    	}
		else
		{
    		return redirect()->back();
    	}
    }

	public function getLogout()
	{
		Auth::guard('customer')->logout();
		Cart::destroy();
		return redirect('/');
	}

	public function getCustomer()
	{
		return view('client.login.login');
	}

    public function postCustomer(CustomerRequest $request)
	{
		$customer = new Customers();
		$customer->name = $request->name_register;
		$customer->phone = $request->phone_register;
        $customer->address = $request->address_register;
		$customer->status = 1;
		$customer->email = $request->emmail_register;
		$customer->username = $request->username_register;
		$customer->password = Hash::make($request->pass_register);
		$customer->remember_token = $request->_token;
		$customer->save();
		return redirect()->route('client.login.login');
	}
}
