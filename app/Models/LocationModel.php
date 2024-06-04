<?php

namespace Modules\Core\Models;

class LocationModel {
    public string $slug;
        /** @var null|Collection<LocationModel, int> $locations */
        public $locations;
}