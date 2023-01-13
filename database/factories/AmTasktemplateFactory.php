<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AmTasktemplate;

class AmTasktemplateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AmTasktemplate::class;

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
            'priority'          => $this->faker->randomElement([
                'High'   => 'High',
                'Medium' => 'Medium',
                'Low'    => 'Low',
            ]),
            'percent_complete'  => $this->faker->numberBetween(1, 100),
            'predecessors'      => $this->faker->randomNumber(),
            'milestone_flag'    => $this->faker->boolean(),
            'relationship_type' => $this->faker->randomKey([
                'FS' => 'Finish to Start',
                'SS' => 'Start to Start',
            ]),
            'task_number'       => $this->faker->randomNumber(6),
            'order_number'      => $this->faker->randomNumber(6),
            'estimated_effort'  => $this->faker->numberBetween(1, 10),
            'utilization'       => $this->faker->text(10),
            'duration'          => $this->faker->numberBetween(1, 100),
            'status'            => $this->faker->randomKey([
                'Not Started'   => 'Not Started',
                'In Progress'   => 'In Progress',
                'Completed'     => 'Completed',
                'Pending Input' => 'Pending Input',
                'Deferred'      => 'Deferred',
            ]),
            'created_at'        => $this->faker->dateTime(),
            'updated_at'        => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
