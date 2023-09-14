<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class BladeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        Blade::if('player', function () {
            return auth()->check() && auth()->user()->type == 'player';
        });

        Blade::if('owner', function () {
            return auth()->check() && auth()->user()->type == 'owner';
        });
    }
}
