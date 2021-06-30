<?php

namespace App\DataTables;

use App\Models\Car;

/**
 * Class CarDataTable
 */
class CarDataTable
{
    /**
     * @return Car
     */
    public function get()
    {
        /** @var Car $query */
        $query = Car::query()->select('cars.*');

        return $query;
    }
}
