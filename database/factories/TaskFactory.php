<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Task;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->name(),
            'description'     => $this->faker->text(500),
            'date_due_flag'   => $this->faker->boolean(),
            'date_due'        => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'date_start_flag' => $this->faker->boolean(),
            'date_start'      => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'parent_type'     => null,
            'parent_id'       => null,
            'contact_id'      => null,
            'priority'        => $this->faker->randomKey([
                'Low'    => 'Low',
                'Medium' => 'Medium',
                'High'   => 'High',
            ]),
            'status'          => $this->faker->randomKey([
                'Not Started' => 'Not Started',
                'Active'      => 'Active',
                'Inactive'    => 'Inactive',
            ]),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
