<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AowCondition;

class AowConditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AowCondition::class;

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
            'condition_order' => $this->faker->numberBetween(1, 100),
            'module_path'     => null,
            'field'           => $this->faker->word(),
            'operator'        => $this->faker->word(),
            'value_type'      => $this->faker->word(),
            'value'           => $this->faker->word(),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
