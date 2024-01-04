<?php

namespace Modules\Core;

use Livewire\Livewire;
use Illuminate\Support\Facades\Route;
use Modules\Core\Forms\WorldSceneForm;
use Illuminate\Support\ServiceProvider;
use Modules\Core\Controllers\CoreController;

class CoreServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'\views', 'core');
        $this->loadMigrationsFrom(__DIR__.'\database/migrations');
        Route::middleware(['auth', 'web'])->group(function () {
            Route::get('/scene', [CoreController::class, 'scene']);
        });

        Livewire::component('core::scene', WorldSceneForm::class);
    }
}
