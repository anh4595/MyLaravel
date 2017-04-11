<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use DB,Cart;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->share('infocart','content');
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') 
        {
		    $this->app->register('Hesto\MultiAuth\MultiAuthServiceProvider');
	    }
    }
}
