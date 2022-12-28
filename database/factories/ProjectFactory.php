<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Project;

class ProjectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Project::class;

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
            'estimated_start_date'    => $this->faker->dateTimeBetween('-1month', '+1month')->format('Y-m-d'),
            'estimated_end_date'      => $this->faker->dateTimeBetween('-1month', '+1month')->format('Y-m-d'),
            'status'                  => $this->faker->randomKey(
                config('joy-voyager-crm.projects.statuses', [
                    'Active'   => 'Active',
                    'Inactive' => 'Inactive',
                ])
            ),
            'priority'                => $this->faker->randomKey(
                config('joy-voyager-crm.projects.priorities', [
                    'Low'    => 'Low',
                    'Medium' => 'Medium',
                    'High'   => 'High',
                ])
            ),
            'override_business_hours' => $this->faker->boolean(),
            'created_at'              => $this->faker->dateTime(),
            'updated_at'              => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
