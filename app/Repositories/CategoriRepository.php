<?php

namespace App\Repositories;

use App\Models\Categori;
use App\Repositories\BaseRepository;

/**
 * Class CategoriRepository
 * @package App\Repositories
 * @version June 9, 2021, 6:26 am UTC
*/

class CategoriRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CATNAME'
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
        return Categori::class;
    }
}
