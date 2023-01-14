<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AokKnowledgebaseAudit;

class AokKnowledgebaseAuditFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AokKnowledgebaseAudit::class;

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
