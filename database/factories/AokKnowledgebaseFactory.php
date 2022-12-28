<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AokKnowledgebase;

class AokKnowledgebaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AokKnowledgebase::class;

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
            'revision'        => $this->faker->text(50),
            'additional_info' => $this->faker->paragraphs(10, true),
            'user_id_c'       => null,
            'user_id1_c'      => null,
            'status'          => $this->faker->randomElement([
                'Draft',
                'Active',
                'Inactive',
            ]),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
