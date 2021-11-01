<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Questionoption
 * @package App\Models
 * @version October 31, 2021, 7:44 pm UTC
 *
 * @property string $option1
 * @property string $option2
 * @property string $correct
 */
class Questionoption extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'questionoptions';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'option1',
        'option2',
        'correct'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'option1' => 'string',
        'option2' => 'string',
        'correct' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'option1' => 'required|string|max:255',
        'option2' => 'required|string|max:255',
        'correct' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
