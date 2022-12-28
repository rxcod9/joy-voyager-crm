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
                'Low',
                'Medium',
                'High',
            ]),
            'status'                  => $this->faker->randomElement([
                'Draft',
                'Active',
                'Inactive',
            ]),
            'override_business_hours' => $this->faker->boolean(),
            'created_at'              => $this->faker->dateTime(),
            'updated_at'              => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
