<?php

namespace Modules\Core\Forms;

use App\Models\User;
use Livewire\Component;

class BaseForm extends Component
{
    public User $user;

    public string $view;

    public function mount($view)
    {
        $this->view = $view;
        $this->user = auth()->user();

        $this->init();
    }

    private function init()
    {

    }

    public function render()
    {
        return view($this->view);
    }
}