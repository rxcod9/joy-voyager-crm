<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Surveyquestion;

class SurveyquestionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Surveyquestion::class;

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
            'type'               => $this->faker->randomKey([
                'Text'        => 'Text',
                'Textbox'     => 'Textbox',
                'Checkbox'    => 'Checkbox',
                'Radio'       => 'Radio',
                'Dropdown'    => 'Dropdown',
                'Multiselect' => 'Multiselect',
                'Matrix'      => 'Matrix',
                'DateTime'    => 'DateTime',
                'Date'        => 'Date',
                'Scale'       => 'Scale',
                'Rating'      => 'Rating',
            ]),
            'happiness_question' => $this->faker->boolean(),
            'survey_id'          => null,
            'created_at'         => $this->faker->dateTime(),
            'updated_at'         => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
