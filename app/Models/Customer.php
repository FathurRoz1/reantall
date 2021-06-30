<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Customer
 * @package App\Models
 * @version June 9, 2021, 5:57 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $bookings
 * @property \Illuminate\Database\Eloquent\Collection $testimonies
 * @property string $CUSTNAME
 * @property string $CUSTADDR
 * @property string $CUSTPHONE
 * @property string $CUSTEMAIL
 * @property string $CUSTIDENTITY
 * @property string $CUSTBIRTH
 * @property string $CUSTPICT
 * @property string $CUSTGENDER
 * @property string $CUSTCOMPANY
 */
class Customer extends Model
{
    use SoftDeletes;

    public $table = 'customers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'IDCUST';

    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CUSTNAME' => 'string',
        'CUSTADDR' => 'string',
        'CUSTPHONE' => 'string',
        'CUSTEMAIL' => 'string',
        'CUSTIDENTITY' => 'string',
        'CUSTBIRTH' => 'date',
        'CUSTPICT' => 'string',
        'CUSTGENDER' => 'string',
        'CUSTCOMPANY' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CUSTNAME' => 'nullable|string|max:35',
        'CUSTADDR' => 'nullable|string|max:60',
        'CUSTPHONE' => 'nullable|string|max:15',
        'CUSTEMAIL' => 'nullable|string|max:35',
        'CUSTIDENTITY' => 'nullable|string|max:50',
        'CUSTBIRTH' => 'nullable',
        'CUSTPICT' => 'nullable|string|max:50',
        'CUSTGENDER' => 'nullable|string|max:10',
        'CUSTCOMPANY' => 'nullable|string|max:50',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function bookings()
    {
        return $this->hasMany(\App\Models\Booking::class, 'IDCUST');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function testimonies()
    {
        return $this->hasMany(\App\Models\Testimony::class, 'IDCUST');
    }
}
