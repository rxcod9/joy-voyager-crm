<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Note;

class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'           => $this->faker->name(),
            'description'    => $this->faker->text(500),
            'name'           => $this->faker->text(50),
            'file_mime_type' => $this->faker->text(50),
            'filename'       => $this->faker->text(50),
            'parent_type'    => $this->faker->text(50),
            'parent_id'      => null,
            'contact_id'     => null,
            'portal_flag'    => $this->faker->boolean(),
            'embed_flag'     => $this->faker->boolean(),
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
