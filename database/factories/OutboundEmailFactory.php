<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\OutboundEmail;

class OutboundEmailFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = OutboundEmail::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'              => $this->faker->name(),
            'type'              => $this->faker->randomElement([
                'Type1',
                'Type2',
            ]),
            'smtp_from_name'    => $this->faker->text(50),
            'smtp_from_addr'    => $this->faker->text(50),
            'mail_sendtype'     => $this->faker->text(8),
            'mail_smtptype'     => $this->faker->text(20),
            'mail_smtpserver'   => $this->faker->text(50),
            'mail_smtpport'     => $this->faker->numberBetween(1000, 2000),
            'mail_smtpuser'     => $this->faker->text(50),
            'mail_smtppass'     => $this->faker->text(50),
            'mail_smtpauth_req' => $this->faker->boolean(),
            'mail_smtpssl'      => (string) (int) $this->faker->boolean(),
            'created_at'        => $this->faker->dateTime(),
            'updated_at'        => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
