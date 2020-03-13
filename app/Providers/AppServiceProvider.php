<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\User\Entities\Unit;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*
        |--------------------------------------------------------------------------
        | Set Units variable for admin header
        |--------------------------------------------------------------------------
        |*/
        view()->composer('Master.header',function($view){
            if(auth()->check()){
                // find user detail
                $units       = Unit::all();
               
                $view ->with(compact('units'));
            }
        });



    }
}
