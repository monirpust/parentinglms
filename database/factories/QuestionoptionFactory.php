<?php

namespace Database\Factories;

use App\Models\Questionoption;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionoptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Questionoption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'option1' => $this->faker->word,
        'option2' => $this->faker->word,
        'correct' => $this->faker->word,
        'deleted_at' => $this->faker->date('Y-m-d H:i:s'),
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
