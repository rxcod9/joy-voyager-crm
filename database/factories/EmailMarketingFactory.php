<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\EmailMarketing;

class EmailMarketingFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = EmailMarketing::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               => $this->faker->name(),
            'from_name'          => $this->faker->name(),
            'from_addr'          => $this->faker->safeEmail(),
            'reply_to_name'      => $this->faker->name(),
            'reply_to_addr'      => $this->faker->safeEmail(),
            'inbound_email_id'   => null,
            'date_start'         => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'template_id'        => null,
            'campaign_id'        => null,
            'outbound_email_id'  => null,
            'all_prospect_lists' => $this->faker->boolean(),
            'status'             => $this->faker->randomKey([
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
            ]),
            'created_at'         => $this->faker->dateTime(),
            'updated_at'         => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
