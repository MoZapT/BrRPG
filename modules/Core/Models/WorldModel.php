<?php

namespace Modules\Core\Models;

use App\Models\BaseModel;

class WorldModel extends BaseModel
{
    public TimeModel $time;
    /** @var Collection<LocationModel, int> $locations */
    public $locations;
    /** @var Collection<EntityModel, int> $entities */
    public $entities;
}