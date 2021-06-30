<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Booking
 * @package App\Models
 * @version June 9, 2021, 5:52 am UTC
 *
 * @property \App\Models\Car $idcar
 * @property \App\Models\Customer $idcust
 * @property integer $IDCUST
 * @property string $BOOKSTART
 * @property string $BOOKEND
 * @property string $BOOKDEST
 * @property string $BOOKPICK
 * @property integer $BOOKTOTAL
 * @property string $BOOKSTATUS
 */
class Booking extends Model
{
    use SoftDeletes;

    public $table = 'bookings';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'IDBOOKING';

    public $fillable = [
        'IDCUST',
        'IDCAR',
        'BOOKSTART',
        'BOOKEND',
        'BOOKDEST',
        'BOOKPICK',
        'BOOKTOTAL',
        'BOOKSTATUS'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IDCAR' => 'integer',
        'IDCUST' => 'integer',
        'BOOKSTART' => 'date',
        'BOOKEND' => 'date',
        'BOOKDEST' => 'string',
        'BOOKPICK' => 'string',
        'BOOKTOTAL' => 'integer',
        'BOOKSTATUS' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'IDCAR' => 'required|integer',
        'IDCUST' => 'required|integer',
        'BOOKSTART' => 'nullable',
        'BOOKEND' => 'nullable',
        'BOOKDEST' => 'nullable|string|max:30',
        'BOOKPICK' => 'nullable|string|max:30',
        'BOOKTOTAL' => 'nullable|integer',
        'BOOKSTATUS' => 'nullable|string|max:10',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcar()
    {
        return $this->belongsTo(\App\Models\Car::class, 'IDCAR');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcust()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'IDCUST');
    }
}
