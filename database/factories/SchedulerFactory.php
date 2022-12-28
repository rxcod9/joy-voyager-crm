<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Scheduler;

class SchedulerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Scheduler::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->name(),
            'job'             => $this->faker->text(10),
            'date_time_start' => $this->faker->dateTimeBetween('-1month', 'now'),
            'date_time_end'   => $this->faker->dateTimeBetween('-1month', '+1month'),
            'job_interval'    => $this->faker->text(50),
            'time_from'       => $this->faker->time(),
            'time_to'         => $this->faker->time(),
            'last_run'        => $this->faker->dateTimeBetween('-1month', 'now'),
            'catch_up'        => $this->faker->boolean(),
            'status'          => $this->faker->randomElement([
                'Active',
                'Inactive',
            ]),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
