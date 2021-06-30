<?php

namespace App\Repositories;

use App\Models\Testimoni;
use App\Repositories\BaseRepository;

/**
 * Class TestimoniRepository
 * @package App\Repositories
 * @version June 9, 2021, 5:58 am UTC
*/

class TestimoniRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'IDCUST',
        'TESTIMONI',
        'STAR'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Testimoni::class;
    }
}
