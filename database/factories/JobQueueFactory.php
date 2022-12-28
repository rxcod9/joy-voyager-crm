<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\JobQueue;

class JobQueueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobQueue::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'             => $this->faker->name(),
            'scheduler_id'     => null,
            'execute_time'     => $this->faker->dateTimeBetween('-1month', 'now'),
            'resolution'       => $this->faker->randomKey([
                'Resolution1' => 'Resolution1',
                'Resolution2' => 'Resolution2',
            ]),
            'message'          => $this->faker->paragraphs(10, true),
            'target'           => $this->faker->word(),
            'data'             => null,
            'requeue'          => $this->faker->boolean(),
            'retry_count'      => $this->faker->numberBetween(0, 1),
            'failure_count'    => $this->faker->numberBetween(0, 1),
            'job_delay'        => $this->faker->numberBetween(1, 10),
            'client'           => $this->faker->word(),
            'percent_complete' => $this->faker->numberBetween(1, 100),
            'status'           => $this->faker->randomElement([
                'Pending'  => 'Pending',
                'Finished' => 'Finished',
            ]),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
