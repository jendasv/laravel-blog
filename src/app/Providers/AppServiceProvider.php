<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public const HOME = '/admin';

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
}

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useTailwind();
        Blade::componentNamespace('Laravel\Breeze\View\Components', 'auth');
    }
}
