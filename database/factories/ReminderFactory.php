<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Reminder;

class ReminderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reminder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                    => $this->faker->name(),
            'description'             => $this->faker->text(500),
            'popup'                   => $this->faker->boolean(),
            'email'                   => $this->faker->boolean(),
            'email_sent'              => $this->faker->boolean(),
            'timer_popup'             => $this->faker->text(32),
            'timer_email'             => $this->faker->text(32),
            'related_event_module'    => null,
            'related_event_module_id' => null,
            'date_willexecute'        => $this->faker->dateTimeBetween('-1month', 'now')->getTimestamp(),
            'popup_viewed'            => $this->faker->boolean(),
            'created_at'              => $this->faker->dateTime(),
            'updated_at'              => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
