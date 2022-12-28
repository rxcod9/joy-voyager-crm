<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Email;

class EmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Email::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               => $this->faker->name(),
            // 'description' => $this->faker->text(500),
            'orphaned'           => $this->faker->boolean(),
            'last_synced'        => $this->faker->dateTimeBetween('-1month', 'now'),
            'date_sent_received' => $this->faker->dateTimeBetween('-1month', 'now'),
            // 'message_id' => null,
            'type'               => $this->faker->randomElement([
                'Type1',
                'Type2',
            ]),
            'status'             => $this->faker->randomElement([
                'Active',
                'Inactive',
            ]),
            'flagged'            => $this->faker->boolean(),
            'reply_to_status'    => $this->faker->boolean(),
            'intent'             => $this->faker->text('10'),
            'mailbox_id'         => null,
            'parent_type'        => $this->faker->randomElement([
                'opportunities',
                'cases',
                'leads',
                'project',
                'prospects',
                'bugs',
                'project_task',
                'accounts',
            ]),
            'parent_id'          => null,
            'uid'                => null,
            'category_id'        => null,
            'created_at'         => $this->faker->dateTime(),
            'updated_at'         => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
