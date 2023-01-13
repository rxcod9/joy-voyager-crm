<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Folder;

class FolderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Folder::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            // 'description' => $this->faker->text(500),
            'folder_type'   => $this->faker->randomKey([
                'inbound'  => 'inbound',
                'draft'    => 'draft',
                'sent'     => 'sent',
                'archived' => 'archived',
            ]),
            'parent_folder' => null,
            'has_child'     => $this->faker->boolean(),
            'is_group'      => $this->faker->boolean(),
            'is_dynamic'    => $this->faker->boolean(),
            'dynamic_query' => null,
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
