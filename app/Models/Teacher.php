<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Teacher
 * @package App\Models
 * @version October 31, 2021, 7:42 pm UTC
 *
 * @property string $name
 * @property string $image
 * @property string $gender
 * @property string $email
 * @property string $dob
 * @property string $phone
 * @property string $address
 * @property string $nationality
 * @property string $nid_no
 * @property string $dateregistered
 * @property string $user_id
 */
class Teacher extends Model
{
    use SoftDeletes;

    use HasFactory;

    public $table = 'teachers';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';


    protected $dates = ['deleted_at'];



    public $fillable = [
        'name',
        'image',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'nationality',
        'nid_no',
        'dateregistered',
        'user_id'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'teacher_id' => 'integer',
        'name' => 'string',
        'image' => 'string',
        'gender' => 'string',
        'email' => 'string',
        'dob' => 'date',
        'phone' => 'string',
        'address' => 'string',
        'nationality' => 'string',
        'nid_no' => 'string',
        'dateregistered' => 'date',
        'user_id' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'name' => 'required|string|max:255',
        'image' => 'nullable|string|max:255',
        'gender' => 'required|string|max:255',
        'email' => 'required|string|max:255',
        'dob' => 'required',
        'phone' => 'required|string|max:255',
        'address' => 'required|string|max:255',
        'nationality' => 'required|string|max:255',
        'nid_no' => 'required|string|max:255',
        'dateregistered' => 'required',
        'user_id' => 'required|string|max:255',
        'deleted_at' => 'nullable',
        'created_at' => 'nullable',
        'updated_at' => 'nullable'
    ];

    
}
