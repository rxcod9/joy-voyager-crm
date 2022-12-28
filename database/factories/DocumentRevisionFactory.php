<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\DocumentRevision;

class DocumentRevisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = DocumentRevision::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'change_log'     => $this->faker->text(30),
            'document_id'    => null,
            'doc_id'         => $this->faker->uuid(),
            'doc_type'       => $this->faker->word(),
            'doc_url'        => $this->faker->url(),
            'filename'       => $this->faker->word(),
            'file_ext'       => $this->faker->word(),
            'file_mime_type' => $this->faker->word(),
            'revision'       => $this->faker->semver(),
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
