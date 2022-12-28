<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AorCondition;

class AorConditionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AorCondition::class;

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
            'aor_report_id'   => null,
            'condition_order' => $this->faker->numberBetween(1, 100),
            'logic_op'        => null,
            'parenthesis'     => null,
            'module_path'     => null,
            'field'           => $this->faker->word(),
            'operator'        => $this->faker->randomKey([
                'equal_to'        => 'equal_to',
                'not_equal_to'    => 'not_equal_to',
                'contains'        => 'contains',
                'not_contains'    => 'not_contains',
                'starts_with'     => 'starts_with',
                'not_starts_with' => 'not_starts_with',
                'ends_with'       => 'ends_with',
                'not_ends_with'   => 'not_ends_with',
                'is_null'         => 'is_null',
                'not_null'        => 'not_null',
                'in'              => 'in',
                'not_in'          => 'not_in',
            ]),
            'value_type'      => $this->faker->randomKey([
                'value' => 'value',
                'field' => 'field',
            ]),
            'value'           => $this->faker->text(50),
            'parameter'       => $this->faker->boolean(),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
