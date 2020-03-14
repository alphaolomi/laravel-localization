<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\SoftDeletes;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Post
 * @package App\Models\Admin
 * @version March 14, 2020, 3:59 pm UTC
 *
 * @property string title
 * @property string description
 * @property integer user_id
 */
class Post extends Model
{
    use SoftDeletes;
    use Sluggable;

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
    public $table = 'posts';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'description',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'title' => 'string',
        'description' => 'string',
        'user_id' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|min3',
        'description' => 'required|min3'
    ];


}
