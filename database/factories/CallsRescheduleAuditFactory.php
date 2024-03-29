<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\CallsRescheduleAudit;

class CallsRescheduleAuditFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CallsRescheduleAudit::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'field_name'          => null,
            'data_type'           => null,
            'request'             => null,
            'step'                => null,
            'before_value_string' => null,
            'after_value_string'  => null,
            'before_value_text'   => null,
            'after_value_text'    => null,
            'created_at'          => $this->faker->dateTime(),
            'updated_at'          => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
