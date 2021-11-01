<?php

namespace App\Repositories;

use App\Models\Lesson;
use App\Repositories\BaseRepository;

/**
 * Class LessonRepository
 * @package App\Repositories
 * @version October 31, 2021, 7:43 pm UTC
*/

class LessonRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'slug',
        'lesson_image',
        'description',
        'active'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Lesson::class;
    }
}
