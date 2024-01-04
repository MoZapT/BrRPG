<?php

namespace Modules\Core;

use Livewire\Livewire;
use Modules\Core\Forms\WorldSceneForm;
use Illuminate\Support\ServiceProvider;

class CoreServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__.'\views', 'core');
        $this->loadMigrationsFrom(__DIR__.'\database\migrations');
        $this->loadRoutesFrom(__DIR__.'\routes.php');

        Livewire::component('core::scene', WorldSceneForm::class);
    }
}
