<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class UIServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        Blade::component('layouts.app', 'app-layout');
    }
}
