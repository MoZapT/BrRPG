<?php

namespace Modules\Core\Forms;

use Livewire\Component;
use Modules\Core\Models\TimeModel;
use Modules\Core\Models\EntityModel;
use Modules\Core\Models\LocationModel;
use Modules\Core\Models\MonthModel;
use Modules\Core\Models\WorldModel;
use Modules\Core\Managers\WorldGenerationManager;

class WorldSceneForm extends Component
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