<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Surveyquestionoption;

class SurveyquestionoptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surveyquestionoption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               => $this->faker->name(),
            'description'        => $this->faker->text(500),
            'sort_order'         => $this->faker->numberBetween(1, 100),
            'survey_question_id' => null,
            'created_at'         => $this->faker->dateTime(),
            'updated_at'         => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
