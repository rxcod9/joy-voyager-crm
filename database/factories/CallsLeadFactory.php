<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\CallsLead;

class CallsLeadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CallsLead::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'call_id'       => null,
            'lead_id'       => null,
            'required'      => $this->faker->randomKey([
                '1' => 'Y',
                '0' => 'N',
            ]),
            'accept_status' => $this->faker->randomKey([
                'none'    => 'none',
                'Accept1' => 'Accept1',
                'Accept2' => 'Accept2',
            ]),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
