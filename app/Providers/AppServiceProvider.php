<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        Validator::extend('nif', function($attribute, $value, $parameters, $validator) {
            $letra = substr($value, -1);
            $num = substr($value, 0, -1);
            if (empty($value) == false) {
                if ( substr("TRWAGMYFPDXBNJZSQVHLCKE", $num%23, 1) == $letra && strlen($letra) == 1 && strlen ($num) == 8) {
                    return true;
                } else{
                    return false;
                }        
            }
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
