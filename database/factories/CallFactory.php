<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Call;

class CallFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Call::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                => $this->faker->name(),
            'description'         => $this->faker->text(500),
            'duration_hours'      => $this->faker->numberBetween(1, 24),
            'duration_minutes'    => $this->faker->numberBetween(1, 60),
            'date_start'          => $this->faker->dateTimeBetween('-3months', '-2months'),
            'date_end'            => $this->faker->dateTimeBetween('-2months', '-1month'),
            'parent_type'         => null,
            'parent_id'           => null,
            'status'              => $this->faker->randomElement([
                'Active',
                'Inactive',
                'Planned',
            ]),
            'direction'           => $this->faker->randomElement([
                'INCOMING',
                'OUTGOING',
            ]),
            'reminder_time'       => $this->faker->randomNumber(8),
            'email_reminder_time' => $this->faker->randomNumber(8),
            'email_reminder_sent' => $this->faker->boolean(),
            'outlook_id'          => null,
            'repeat_type'         => null,
            'repeat_interval'     => null,
            'repeat_dow'          => null,
            'repeat_until'        => null,
            'repeat_count'        => null,
            'repeat_parent_id'    => null,
            'recurring_source'    => null,
            'created_at'          => $this->faker->dateTime(),
            'updated_at'          => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
