<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\RemindersInvitee;

class RemindersInviteeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RemindersInvitee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                      => $this->faker->name(),
            'description'               => $this->faker->text(500),
            'reminder_id'               => null,
            'related_invitee_module'    => $this->faker->randomElement([
                'Module1',
                'Module2',
            ]),
            'related_invitee_module_id' => $this->faker->uuid(),
            'created_at'                => $this->faker->dateTime(),
            'updated_at'                => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
