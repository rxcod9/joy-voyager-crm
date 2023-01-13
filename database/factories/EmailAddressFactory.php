<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Joy\VoyagerCrm\Models\EmailAddress;

class EmailAddressFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmailAddress::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $email = $this->faker->unique()->safeEmail();
        return [
            'email_address'            => $email,
            'email_address_caps'       => Str::upper($email),
            'invalid_email'            => $this->faker->boolean(),
            'opt_out'                  => $this->faker->boolean(),
            'confirm_opt_in'           => $this->faker->randomKey([
                'not-opt-in'       => 'Disabled',
                'opt-in'           => 'Opt In',
                'confirmed-opt-in' => 'Confirmed Opt In'
            ]),
            'confirm_opt_in_date'      => $this->faker->dateTimeBetween('-1month', 'now'),
            'confirm_opt_in_sent_date' => $this->faker->dateTimeBetween('-1month', 'now'),
            'confirm_opt_in_fail_date' => null,
            'confirm_opt_in_token'     => Str::random(20),
            'created_at'               => $this->faker->dateTime(),
            'updated_at'               => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
