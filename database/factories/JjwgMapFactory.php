<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\JjwgMap;

class JjwgMapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JjwgMap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(500),
            'distance'    => $this->faker->randomFloat(4, 5, 20),
            'unit_type'   => $this->faker->randomElement([
                'Mi',
                'Km',
            ]),
            'module_type' => null,
            'parent_type' => null,
            'parent_id'   => null,
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
