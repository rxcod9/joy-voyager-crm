<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\FpEventLocation;

class FpEventLocationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = FpEventLocation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'               => $this->faker->name(),
            'description'        => $this->faker->text(500),
            'address'            => $this->faker->streetName(),
            'address_city'       => $this->faker->city(),
            'address_country'    => $this->faker->country(),
            'address_postalcode' => $this->faker->postcode(),
            'address_state'      => $this->faker->state(),
            'capacity'           => $this->faker->text(50),
            'created_at'         => $this->faker->dateTime(),
            'updated_at'         => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
