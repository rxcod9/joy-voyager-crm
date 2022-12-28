<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\LinkedDocument;

class LinkedDocumentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = LinkedDocument::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'parent_id'            => $this->faker->uuid(),
            'parent_type'          => $this->faker->word(),
            'document_id'          => $this->faker->uuid(),
            'document_revision_id' => $this->faker->uuid(),
            'created_at'           => $this->faker->dateTime(),
            'updated_at'           => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
