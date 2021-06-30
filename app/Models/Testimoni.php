<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Testimoni
 * @package App\Models
 * @version June 9, 2021, 5:58 am UTC
 *
 * @property \App\Models\Customer $idcust
 * @property integer $IDCUST
 * @property string $TESTIMONI
 * @property integer $STAR
 */
class Testimoni extends Model
{
    use SoftDeletes;

    public $table = 'testimonies';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'IDTEST';

    public $fillable = [
        'IDCUST',
        'TESTIMONI',
        'STAR'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IDCUST' => 'integer',
        'TESTIMONI' => 'string',
        'STAR' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'IDCUST' => 'nullable|integer',
        'TESTIMONI' => 'nullable|string',
        'STAR' => 'nullable|integer',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function idcust()
    {
        return $this->belongsTo(\App\Models\Customer::class, 'IDCUST');
    }
}
