<?php

namespace Modules\Core\Forms;

use Livewire\Component;
use Modules\Core\Models\TimeModel;
use Modules\Core\Models\EntityModel;
use Modules\Core\Models\LocationModel;
use Modules\Core\Models\MonthModel;
use Modules\Core\Models\WorldModel;

class WorldSceneForm extends Component
{
    public EntityModel $player;
    public WorldModel $world;
    /** @var Collection<LocationModel, int> $locations */
    public $locations;
    /** @var Collection<EntityModel, int> $entities */
    public $entities;

    public function mount()
    {
        $this->init();
    }

    private function init()
    {
        $this->generateWorld();
    }

    private function generateWorld()
    {
        $time = new TimeModel([
            new MonthModel(['slug' => 'january', 'days' => 31]),
            new MonthModel(['slug' => 'february', 'days' => 31]),
            new MonthModel(['slug' => 'march', 'days' => 31]),
            new MonthModel(['slug' => 'april', 'days' => 31]),
            new MonthModel(['slug' => 'may', 'days' => 31]),
            new MonthModel(['slug' => 'juny', 'days' => 31]),
            new MonthModel(['slug' => 'july', 'days' => 31]),
            new MonthModel(['slug' => 'august', 'days' => 31]),
            new MonthModel(['slug' => 'september', 'days' => 31]),
            new MonthModel(['slug' => 'october', 'days' => 31]),
            new MonthModel(['slug' => 'november', 'days' => 31]),
            new MonthModel(['slug' => 'december', 'days' => 31]),
        ]);

        $this->world = new WorldModel(['time' => $time]);
    }

    public function render()
    {
        return view('core::scene');
    }
}