<?php

namespace App\Repositories;

use App\Models\Customer;
use App\Repositories\BaseRepository;

/**
 * Class CustomerRepository
 * @package App\Repositories
 * @version June 9, 2021, 5:57 am UTC
*/

class CustomerRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CUSTNAME',
        'CUSTADDR',
        'CUSTPHONE',
        'CUSTEMAIL',
        'CUSTIDENTITY',
        'CUSTBIRTH',
        'CUSTPICT',
        'CUSTGENDER',
        'CUSTCOMPANY'
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
        return Customer::class;
    }
}
