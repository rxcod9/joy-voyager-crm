<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AmProjecttemplate;

class AmProjecttemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AmProjecttemplate::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                    => $this->faker->name(),
            'description'             => $this->faker->text(500),
            'priority'                => $this->faker->randomElement([
                'High'   => 'High',
                'Medium' => 'Medium',
                'Low'    => 'Low',
            ]),
            'status'                  => $this->faker->randomKey([
                'Draft'     => 'Draft',
                'In Review' => 'In Review',
                'Underway'  => 'Underway',
                'On_Hold'   => 'On Hold',
                'Completed' => 'Completed',
            ]),
            'override_business_hours' => $this->faker->boolean(),
            'created_at'              => $this->faker->dateTime(),
            'updated_at'              => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
