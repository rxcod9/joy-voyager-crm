<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Eapm;

class EapmFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Eapm::class;

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
            'password'        => $this->faker->text(50),
            'url'             => $this->faker->text(50),
            'application'     => $this->faker->text(50),
            'api_data'        => $this->faker->paragraphs(10, true),
            'consumer_key'    => $this->faker->text(50),
            'consumer_secret' => $this->faker->text(50),
            'oauth_token'     => $this->faker->text(50),
            'oauth_secret'    => $this->faker->text(50),
            'validated'       => $this->faker->boolean(),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
