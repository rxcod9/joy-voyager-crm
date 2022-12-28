<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\InboundEmail;

class InboundEmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InboundEmail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'           => $this->faker->name(),
            // 'description' => $this->faker->text(500),
            'status'         => $this->faker->randomElement([
                'Active',
                'Inactive',
            ]),
            'server_url'     => 'smtp.gmail.com', // $this->faker->text(50),
            'email_user'     => $this->faker->freeEmail(),
            'email_password' => $this->faker->password(),
            'port'           => $this->faker->numberBetween(2000, 5000),
            'service'        => $this->faker->text(10),
            'mailbox'        => $this->faker->text(50),
            'delete_seen'    => $this->faker->boolean(),
            'mailbox_type'   => $this->faker->randomElement([
                'MailboxType1',
                'MailboxType2',
            ]),
            // 'template_id'    => null,
            // 'stored_options'    => null,
            // 'group_id'    => null,
            'is_personal'    => $this->faker->boolean(),
            'groupfolder_id' => null,
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
