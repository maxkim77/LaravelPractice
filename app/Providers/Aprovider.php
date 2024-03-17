<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Aprovider;
use App\Providers\Basecontroller;

class Aprovider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->bind(Acontroller::class, function($app){
            return new Acontroller($app->make(Basecontroller::class));
        
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
