<?php

namespace Modules\Core\Controllers;

use App\Http\Controllers\Controller;

class CoreController extends Controller
{
    public function scene()
    {
        // $this->authorize();
        if(auth()->user() == null) abort(400, "Denied!");;

        return livewire('core::scene');
    }
}