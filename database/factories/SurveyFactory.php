<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Survey;

class SurveyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Survey::class;

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
            'status'            => $this->faker->randomKey(
                config('joy-voyager-crm.surveys.statuses', [
                    'Draft'     => 'Draft',
                    'Published' => 'Published',
                ])
            ),
            'submit_text'       => $this->faker->text(10),
            'satisfied_text'    => $this->faker->text(10),
            'neither_text'      => $this->faker->text(10),
            'dissatisfied_text' => $this->faker->text(10),
            'created_at'        => $this->faker->dateTime(),
            'updated_at'        => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
