<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Lesson
 * @package App\Models
 * @version October 31, 2021, 7:43 pm UTC
 *
 * @property string $title
 * @property string $slug
 * @property string $lesson_image
 * @property string $description
 * @property boolean $active
 */
class Lesson extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'lessons';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'lesson_image',
        'description',
        'active'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'lesson_id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'lesson_image' => 'string',
        'description' => 'string',
        'active' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'lesson_image' => 'required|string|max:255',
        'description' => 'required|string|max:255',
        'active' => 'required|boolean',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
