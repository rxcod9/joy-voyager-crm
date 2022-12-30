<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Surveyquestionresponse;

class SurveyquestionresponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surveyquestionresponse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name(),
            'description'       => $this->faker->text(500),
            'answer'            => $this->faker->paragraphs(10, true),
            'answer_bool'       => $this->faker->boolean(),
            'answer_datetime'   => $this->faker->dateTimeBetween('-1month', 'now'),
            'surveyquestion_id' => null,
            'surveyresponse_id' => null,
            'created_at'        => $this->faker->dateTime(),
            'updated_at'        => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
