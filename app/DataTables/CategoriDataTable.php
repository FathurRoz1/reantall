<?php

namespace App\DataTables;

use App\Models\Categori;

/**
 * Class CategoriDataTable
 */
class CategoriDataTable
{
    /**
     * @return Categori
     */
    public function get()
    {
        /** @var Categori $query */
        $query = Categori::query()->select('categories.*');

        return $query;
    }
}
