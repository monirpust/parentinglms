<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Course
 * @package App\Models
 * @version November 1, 2021, 9:20 am UTC
 *
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $teachers
 * @property number $price
 * @property string $course_image
 * @property string $start_date
 * @property boolean $status
 */
class Course extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'courses';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'title',
        'slug',
        'description',
        'teachers',
        'price',
        'course_image',
        'start_date',
        'status'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'course_id' => 'integer',
        'title' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'teachers' => 'string',
        'price' => 'decimal:2',
        'course_image' => 'string',
        'start_date' => 'date',
        'status' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'title' => 'required|string|max:255',
        'slug' => 'required|string|max:255',
        'description' => 'required|string',
        'teachers' => 'required|string|max:255',
        'price' => 'required|numeric',
        'course_image' => 'required|string|max:255',
        'start_date' => 'required',
        'deleted_at' => 'nullable',
        'status' => 'required|boolean',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
