<?php

namespace Modules\Core\Models;

use Illuminate\Support\Collection;

class TimeModel {
    public int $year;
    public int $dayOfMonth;
    public MonthModel $month;
    /** @var Collection<MonthModel, int> $months */
    public $months;
}