<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\ProjectTask;
use TCG\Voyager\Facades\Voyager;

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
            'project_id'        => Voyager::model('Project')->factory(),
            'project_task_id'   => $this->faker->randomNumber(6),
            'name'              => $this->faker->name(),
            'relationship_type' => $this->faker->randomKey([
                'FS' => 'Finish to Start',
                'SS' => 'Start to Start',
            ]),
            'description'       => $this->faker->text(500),
            'status'            => $this->faker->randomElement([
                'Not Started'   => 'Not Started',
                'In Progress'   => 'In Progress',
                'Completed'     => 'Completed',
                'Pending Input' => 'Pending Input',
                'Deferred'      => 'Deferred',
            ]),
            'predecessors'      => $this->faker->text(50),
            'date_start'        => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'time_start'        => $this->faker->dateTimeBetween('-1month', 'now')->getTimestamp(),
            'time_finish'       => $this->faker->dateTimeBetween('-1month', 'now')->getTimestamp(),
            'date_finish'       => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'duration'          => $this->faker->numberBetween(10, 100),
            'duration_unit'     => $this->faker->randomKey([
                'Days'  => 'Days',
                'Hours' => 'Hours',
            ]),
            'actual_duration'   => $this->faker->numberBetween(10, 100),
            'percent_complete'  => $this->faker->numberBetween(0, 100),
            'date_due'          => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'time_due'          => $this->faker->time(),
            'parent_task_id'    => $this->faker->randomNumber(6),
            'priority'          => $this->faker->randomElement([
                'High'   => 'High',
                'Medium' => 'Medium',
                'Low'    => 'Low',
            ]),
            'milestone_flag'    => $this->faker->boolean(),
            'order_number'      => $this->faker->randomNumber(6),
            'task_number'       => $this->faker->randomNumber(6),
            'estimated_effort'  => $this->faker->numberBetween(1, 5),
            'actual_effort'     => $this->faker->numberBetween(1, 5),
            'utilization'       => $this->faker->randomKey([
                '0'   => 'none',
                '25'  => '25',
                '50'  => '50',
                '75'  => '75',
                '100' => '100',
            ]),

            'created_at'        => $this->faker->dateTime(),
            'updated_at'        => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
