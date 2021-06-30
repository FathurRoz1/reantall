<?php

namespace App\DataTables;

use App\Models\Customer;

/**
 * Class CustomerDataTable
 */
class CustomerDataTable
{
    /**
     * @return Customer
     */
    public function get()
    {
        /** @var Customer $query */
        $query = Customer::query()->select('customers.*');

        return $query;
    }
}
