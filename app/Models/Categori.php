<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Categori
 * @package App\Models
 * @version June 9, 2021, 6:26 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection $brands
 * @property string $CATNAME
 */
class Categori extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];


    protected $primaryKey = 'IDCAT';

    public $fillable = [
        'CATNAME'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IDCAT' => 'integer',
        'CATNAME' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'CATNAME' => 'nullable|string|max:30',
        'created_at' => 'nullable',
        'updated_at' => 'nullable',
        'deleted_at' => 'nullable'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     **/
    public function brands()
    {
        return $this->belongsToMany(\App\Models\Brand::class, 'cars');
    }
}
