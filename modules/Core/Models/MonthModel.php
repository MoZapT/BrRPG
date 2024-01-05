<?php

namespace Modules\Core\Models;

use App\Models\BaseModel;

class MonthModel extends BaseModel 
{
    public string $slug;
    public int $days;
}