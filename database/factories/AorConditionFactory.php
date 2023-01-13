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
            'logic_op'        => $this->faker->randomKey([
                'And' => 'And',
                'OR'  => 'OR',
            ]),
            'parenthesis'     => null,
            'module_path'     => null,
            'field'           => $this->faker->randomKey([
                'RegularUser'   => 'Regular User',
                'Administrator' => 'Administrator',
            ]),
            'operator'        => $this->faker->randomKey([
                'Equal_To'                 => 'Equal To',
                'Not_Equal_To'             => 'Not Equal To',
                'Greater_Than'             => 'Greater Than',
                'Less_Than'                => 'Less Than',
                'Greater_Than_or_Equal_To' => 'Greater Than or Equal To',
                'Less_Than_or_Equal_To'    => 'Less Than or Equal To',
                'Contains'                 => 'Contains',
                'Not_Contains'             => 'Not Contains',
                'Starts_With'              => 'Starts With',
                'Ends_With'                => 'Ends With',
            ]),
            'value_type'      => $this->faker->randomKey([
                'Value'         => 'Value',
                'Field'         => 'Field',
                'Date'          => 'Date',
                'Multi'         => 'One of',
                'Period'        => 'Period',
                'CurrentUserID' => 'Current User',
            ]),
            'value'           => $this->faker->text(50),
            'parameter'       => $this->faker->boolean(),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
