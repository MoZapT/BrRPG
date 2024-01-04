<?php

use Illuminate\Support\Facades\Route;
use Modules\Core\Controllers\CoreController;

Route::middleware(['auth', 'web'])->group(function () {
    Route::get('/scene', [CoreController::class, 'scene']);
});