<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Templatesectionline;

class TemplatesectionlineFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Templatesectionline::class;

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
            'thumbnail'   => null,
            'grp'         => $this->faker->word(),
            'ord'         => $this->faker->numberBetween(1, 100),
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
