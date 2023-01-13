<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\MeetingsLead;

class MeetingsLeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MeetingsLead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meeting_id'    => null,
            'lead_id'       => null,
            'required'      => $this->faker->randomKey([
                '1' => 'Y',
                '0' => 'N',
            ]),
            'accept_status' => $this->faker->randomKey([
                'accept'    => 'Accepted',
                'decline'   => 'Declined',
                'tentative' => 'Tentative',
                'none'      => 'None',
            ]),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
