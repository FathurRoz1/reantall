<?php

namespace App\DataTables;

use App\Models\Testimoni;

/**
 * Class TestimoniDataTable
 */
class TestimoniDataTable
{
    /**
     * @return Testimoni
     */
    public function get()
    {
        /** @var Testimoni $query */
        $query = Testimoni::query()->select('testimonies.*');

        return $query;
    }
}
