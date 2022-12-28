<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AowProcessedAowAction;

class AowProcessedAowActionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AowProcessedAowAction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'aow_processed_id' => null,
            'aow_action_id'    => null,
            'status'           => $this->faker->randomKey([
                'Pending'  => 'Pending',
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
            ]),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
