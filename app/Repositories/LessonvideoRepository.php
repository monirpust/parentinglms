<?php

namespace App\Repositories;

use App\Models\Lessonvideo;
use App\Repositories\BaseRepository;

/**
 * Class LessonvideoRepository
 * @package App\Repositories
 * @version October 31, 2021, 7:43 pm UTC
*/

class LessonvideoRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'videofile'
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
        return Lessonvideo::class;
    }
}
