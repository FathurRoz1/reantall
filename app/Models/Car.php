<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Car
 * @package App\Models
 * @version June 9, 2021, 5:53 am UTC
 *
 * @property \App\Models\Brand $idbrand
 * @property \App\Models\Category $idcat
 * @property \App\Models\Booking $booking
 * @property integer $IDCAT
 * @property integer $IDBRAND
 * @property string $CARNAME
 * @property integer $CARSEAT
 * @property string $CARCOLOR
 * @property string $CARFUEL
 * @property string $CARNUMBER
 * @property string $CARCYLINDER
 * @property string $CARFEATURE
 * @property string $CARYEAR
 * @property integer $PRICE
 */
class Car extends Model
{
    use SoftDeletes;

    public $table = 'cars';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'IDCAR';

    public $fillable = [
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
        'PRICE',
        'CARPICTURE'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IDCAT' => 'integer',
        'IDBRAND' => 'integer',
        'CARNAME' => 'string',
        'CARSEAT' => 'integer',
        'CARCOLOR' => 'string',
        'CARFUEL' => 'string',
        'CARNUMBER' => 'string',
        'CARCYLINDER' => 'string',
        'CARFEATURE' => 'string',
        'CARYEAR' => 'string',
        'PRICE' => 'integer',
        'CARPICTURE' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'IDCAT' => 'nullable|integer',
        'IDBRAND' => 'nullable|integer',
        'CARNAME' => 'nullable|string|max:30',
        'CARSEAT' => 'nullable|integer',
        'CARCOLOR' => 'nullable|string|max:30',
        'CARFUEL' => 'nullable|string|max:30',
        'CARNUMBER' => 'nullable|string|max:30',
        'CARCYLINDER' => 'nullable|string|max:30',
        'CARFEATURE' => 'nullable|string|max:30',
        'CARYEAR' => 'nullable|string|max:30',
        'PRICE' => 'nullable|integer',
        'CARPICTURE' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idbrand()
    {
        return $this->belongsTo(\App\Models\Brand::class, 'IDBRAND');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcat()
    {
        return $this->belongsTo(\App\Models\Category::class, 'IDCAT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function booking()
    {
        return $this->hasOne(\App\Models\Booking::class);
    }
}
