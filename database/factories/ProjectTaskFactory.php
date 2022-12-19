<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\ProjectTask;

class ProjectTaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProjectTask::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(500),
            'status'      => $this->faker->randomElement([
                'ACTIVE',
                'INACTIVE',
                'PLANNED',
            ]),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
