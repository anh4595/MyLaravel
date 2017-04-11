<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct()
    {
        $this->Login();
    }

    function Login()
    {
        if(Auth::guard('customer')->check())
        {
            view()->share('customer_login',Auth::customer());
        }
        else
        {
            view()->share('user_login',Auth::user());
        }
    }

}
