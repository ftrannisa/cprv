<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class Users
 * @package App\Models
 * @version December 16, 2020, 6:03 pm UTC
 *
 * @property string $pin
 * @property string|\Carbon\Carbon $createdAt
 * @property string|\Carbon\Carbon $updatedAt
 */
class Users extends Model
{

    public $table = 'user';
    
    const CREATED_AT = 'createdAt';
    const UPDATED_AT = 'updatedAt';




    public $fillable = [
        'pin',
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
        'pin' => 'string',
        'createdAt' => 'datetime',
        'updatedAt' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'pin' => 'required|string|max:4',
        'createdAt' => 'nullable',
        'updatedAt' => 'nullable'
    ];

    
}
