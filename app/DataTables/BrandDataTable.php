<?php

namespace App\DataTables;

use App\Models\Brand;

/**
 * Class BrandDataTable
 */
class BrandDataTable
{
    /**
     * @return Brand
     */
    public function get()
    {
        /** @var Brand $query */
        $query = Brand::query()->select('brands.*');

        return $query;
    }
}
