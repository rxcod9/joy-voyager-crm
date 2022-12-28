<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Meeting;

class MeetingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meeting::class;

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
            'location'            => $this->faker->streetName(),
            'password'            => $this->faker->password(),
            'join_url'            => $this->faker->text(50),
            'host_url'            => $this->faker->text(50),
            'displayed_url'       => $this->faker->text(50),
            'creator'             => $this->faker->text(50),
            'external_id'         => $this->faker->text(50),
            'duration_hours'      => $this->faker->numberBetween(0, 24),
            'duration_minutes'    => $this->faker->numberBetween(0, 60),
            'date_start'          => $this->faker->dateTimeBetween('-1month', 'now'),
            'date_end'            => $this->faker->dateTimeBetween('-1month', '+1month'),
            'status'              => $this->faker->randomKey(
                config('joy-voyager-crm.meetings.statuses', [
                    'Planned' => 'Planned',
                ])
            ),
            'type'                => $this->faker->randomKey(
                config('joy-voyager-crm.meetings.types', [
                    'Type1' => 'Type1',
                    'Sugar' => 'Sugar',
                ])
            ),
            'reminder_time'       => $this->faker->unixTime(),
            'email_reminder_time' => $this->faker->unixTime(),
            'email_reminder_sent' => $this->faker->boolean(),
            'outlook_id'          => $this->faker->text(50),
            'sequence'            => $this->faker->numberBetween(0, 100),
            'repeat_type'         => null,
            'repeat_interval'     => null,
            'repeat_dow'          => $this->faker->numberBetween(0, 6),
            'repeat_until'        => $this->faker->date('Y-m-d', '+1month'),
            'repeat_count'        => $this->faker->numberBetween(0, 100),
            'repeat_parent_id'    => null,
            'recurring_source'    => null,
            'gsync_id'            => $this->faker->text(50),
            'gsync_lastsync'      => $this->faker->dateTime()->getTimestamp(),
            'created_at'          => $this->faker->dateTime(),
            'updated_at'          => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
