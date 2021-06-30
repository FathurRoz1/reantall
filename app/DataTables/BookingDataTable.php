<?php

namespace App\DataTables;

use App\Models\Booking;

/**
 * Class BookingDataTable
 */
class BookingDataTable
{
    /**
     * @return Booking
     */
    public function get()
    {
        /** @var Booking $query */
        $query = Booking::query()->select('bookings.*');

        return $query;
    }
}
