<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Auth;


class AppServiceProvider extends ServiceProvider
{
    //public $auth = Auth::check();
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('partials.loginForm', function($view){
/*if ($request->user()) {
                $auth =  true;
             }else{
                $auth =  false;
             }*/
            $view->with('logged',true);
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
