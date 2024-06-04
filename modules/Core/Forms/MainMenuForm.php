<?php

namespace Modules\Core\Forms;

use Livewire\Component;

class MainMenuForm extends Component
{
    public EntityModel $player;
    public WorldModel $world;
    /** @var null|Collection<LocationModel, int> $locations */
    public $locations;
    /** @var null|Collection<EntityModel, int> $entities */
    public $entities;

    public function mount()
    {
        $this->init();
    }

    private function init()
    {
        $this->world = WorldGenerationManager::generate();
    }

    public function render()
    {
        return view('core::scene');
    }
}