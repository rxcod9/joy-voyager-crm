<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\FpEvent;

class FpEventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FpEvent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                 => $this->faker->name(),
            'description'          => $this->faker->text(500),
            'duration_hours'       => $this->faker->numberBetween(1, 100),
            'duration_minutes'     => $this->faker->numberBetween(1, 100),
            'date_start'           => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'date_end'             => $this->faker->dateTimeBetween('-1month', '+1month')->format('Y-m-d'),
            'budget'               => $this->faker->randomFloat(6),
            'currency_id'          => null,
            'invite_templates'     => $this->faker->word(),
            'accept_redirect'      => $this->faker->word(),
            'decline_redirect'     => $this->faker->word(),
            'activity_status_type' => $this->faker->randomKey([
                ''         => '--None--',
                'active'   => 'Active',
                'inactive' => 'Inactive',
            ]),
            'created_at'           => $this->faker->dateTime(),
            'updated_at'           => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
