<?php

namespace App\Repositories;

use App\Models\Questionoption;
use App\Repositories\BaseRepository;

/**
 * Class QuestionoptionRepository
 * @package App\Repositories
 * @version October 31, 2021, 7:44 pm UTC
*/

class QuestionoptionRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'option1',
        'option2',
        'correct'
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
        return Questionoption::class;
    }
}
