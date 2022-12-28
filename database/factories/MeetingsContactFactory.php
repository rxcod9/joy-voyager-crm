<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\MeetingsContact;

class MeetingsContactFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = MeetingsContact::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'meeting_id' => null,
            'contact_id' => null,
            'required'   => $this->faker->randomKey([
                '1' => 'Yes',
                '0' => 'No',
            ]),
            'accept_status'     => $this->faker->randomKey([
                'none'     => 'none',
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
            ]),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
