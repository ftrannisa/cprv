<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Products
 * @package App\Models
 * @version December 16, 2020, 6:03 pm UTC
 *
 * @property string $name
 * @property integer $count
 * @property string|\Carbon\Carbon $createdAt
 * @property string|\Carbon\Carbon $updatedAt
 */
class Products extends Model
{

    public $table = 'products';
    
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';




    public $fillable = [
        'name',
        'count',
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
        'name' => 'string',
        'count' => 'integer',
        'createdAt' => 'datetime',
        'updatedAt' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'nullable|string|max:255',
        'count' => 'nullable|integer',
        'createdAt' => 'nullable',
        'updatedAt' => 'nullable'
    ];

    
}
