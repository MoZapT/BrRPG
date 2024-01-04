<?php

namespace Modules\Core\Controllers;

use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    public function scene()
    {
        return livewire('core::scene');
    }
}