<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\BaseRepository;

/**
 * Class CarRepository
 * @package App\Repositories
 * @version June 9, 2021, 5:53 am UTC
*/

class CarRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'IDCAT',
        'IDBRAND',
        'CARNAME',
        'CARSEAT',
        'CARCOLOR',
        'CARFUEL',
        'CARNUMBER',
        'CARCYLINDER',
        'CARFEATURE',
        'CARYEAR',
        'PRICE'
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
        return Car::class;
    }
}
