<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\CallsUser;

class CallsUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CallsUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'call_id'       => null,
            'user_id'       => null,
            'required'      => $this->faker->randomKey([
                '1' => 'Y',
                '0' => 'N',
            ]),
            'accept_status' => $this->faker->randomKey([
                'none'     => 'none',
                'Accepted' => 'Accepted',
                'Rejected' => 'Rejected',
            ]),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
