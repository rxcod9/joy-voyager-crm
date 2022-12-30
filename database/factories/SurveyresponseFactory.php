<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Surveyresponse;

class SurveyresponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surveyresponse::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                => $this->faker->name(),
            'description'         => $this->faker->text(500),
            'happiness'           => $this->faker->numberBetween(1, 5),
            'email_response_sent' => $this->faker->boolean(),
            'account_id'          => null,
            'campaign_id'         => null,
            'contact_id'          => null,
            'survey_id'           => null,
            'created_at'          => $this->faker->dateTime(),
            'updated_at'          => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
