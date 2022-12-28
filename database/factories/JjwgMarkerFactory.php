<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\JjwgMarker;

class JjwgMarkerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JjwgMarker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'          => $this->faker->name(),
            'description'   => $this->faker->text(500),
            'city'          => $this->faker->city(),
            'state'         => $this->faker->state(),
            'country'       => $this->faker->country(),
            'jjwg_maps_lat' => $this->faker->latitude(),
            'jjwg_maps_lng' => $this->faker->longitude(),
            'marker_image'  => null,
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
