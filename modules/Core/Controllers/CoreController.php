<?php

namespace Modules\Core\Controllers;

use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    public function mainmenu()
    {
        return livewire('core::mainmenu');
    }
}