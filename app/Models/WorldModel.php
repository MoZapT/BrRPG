<?php

namespace Modules\Core\Models;

use App\Models\BaseModel;

class WorldModel extends BaseModel
{
    public TimeModel $time;
    /** @var null|Collection<LocationModel, int> $locations */
    public $locations;
    /** @var null|Collection<EntityModel, int> $entities */
    public $entities;

    protected $fillable = [
        'time',
        'locations',
        'entities',
    ];
}