<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Reports
 * @package App\Models
 * @version December 16, 2020, 6:04 pm UTC
 *
 * @property integer $user_id
 * @property integer $product_id
 * @property string|\Carbon\Carbon $createdAt
 * @property string|\Carbon\Carbon $updatedAt
 */
class Reports extends Model
{

    public $table = 'reports';
    
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';


    public $fillable = [
        'user_id',
        'product_id',
        'createdAt',
        'updatedAt'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'user_id' => 'integer',
        'product_id' => 'integer',
        'createdAt' => 'datetime',
        'updatedAt' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'user_id' => 'required|integer',
        'product_id' => 'required|integer',
        'createdAt' => 'nullable',
        'updatedAt' => 'nullable'
    ];

    
}
