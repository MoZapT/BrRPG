<?php

namespace Modules\Core\Managers;

use Illuminate\Support\Collection;
use Modules\Core\Models\TimeModel;
use Modules\Core\Models\MonthModel;
use Modules\Core\Models\WorldModel;
use Modules\Core\Models\LocationModel;

class WorldGenerationManager 
{
    public static int $locationGenIterations = 10;

    public static function generate(): WorldModel
    {
        return new WorldModel([
            'time' => WorldGenerationManager::generateDateAndTimes(),
            'locations' => WorldGenerationManager::generateLocations(),
        ]);
    }

    /**
     * @return Collection<LocationModel, int>
     */
    private static function generateLocations(): Collection
    {
        $locations = collect([]);

        for ($i = 0; $i < WorldGenerationManager::$locationGenIterations; $i++) {
            $location = new LocationModel();
            $location->slug = $i;
            $locations->push($location);
        }

        return $locations;
    }

    private static function generateDateAndTimes(): TimeModel
    {
        return new TimeModel([
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
    }
}