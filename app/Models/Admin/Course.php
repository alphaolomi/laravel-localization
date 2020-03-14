<?php

namespace App\Models\Admin;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Course
 * @package App\Models\Admin
 * @version March 14, 2020, 4:03 pm UTC
 *
 * @property string name
 * @property string description
 * @property string duration
 */
class Course extends Model
{
    use SoftDeletes;

    public $table = 'courses';
    

    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'description',
        'duration'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'description' => 'string',
        'duration' => 'date'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|min:3',
        'description' => 'required|min:3'
    ];

    
}
