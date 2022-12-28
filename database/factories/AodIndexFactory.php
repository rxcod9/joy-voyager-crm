<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AodIndex;

class AodIndexFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AodIndex::class;

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
            'last_optimised' => $this->faker->dateTimeBetween('-1month', 'now'),
            'location'       => $this->faker->text(50),
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
