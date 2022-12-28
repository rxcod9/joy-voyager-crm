<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AokKnowledgebaseBaseCategory;

class AokKnowledgebaseBaseCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AokKnowledgebaseBaseCategory::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'             => $this->faker->name(),
            'description'      => $this->faker->text(500),
            // 'status'           => $this->faker->randomElement([
            //     'Active',
            //     'Inactive',
            // ]),
            'created_at'          => $this->faker->dateTime(),
            'updated_at'          => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
