<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Emailman;

class EmailmanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Emailman::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'                => null,
            'campaign_id'            => null,
            'marketing_id'           => null,
            'list_id'                => null,
            'send_date_time'         => $this->faker->dateTimeBetween('-1month', 'now'),
            'in_queue'               => $this->faker->boolean(),
            'in_queue_date'          => $this->faker->dateTimeBetween('-1month', 'now'),
            'send_attempts'          => $this->faker->numberBetween(1, 10),
            'related_id'             => null,
            'related_type'           => null,
            'related_confirm_opt_in' => $this->faker->boolean(),
            'created_at'             => $this->faker->dateTime(),
            'updated_at'             => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
