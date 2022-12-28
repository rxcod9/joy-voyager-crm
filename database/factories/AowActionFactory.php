<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AowAction;

class AowActionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AowAction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'            => $this->faker->name(),
            'description'     => $this->faker->text(500),
            'aow_workflow_id' => null,
            'action_order'    => $this->faker->numberBetween(1, 100),
            'action'          => $this->faker->randomElement([
                'ActionType1',
                'ActionType2',
            ]),
            'parameters'      => null,
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
