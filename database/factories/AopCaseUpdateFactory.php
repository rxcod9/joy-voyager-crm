<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AopCaseUpdate;

class AopCaseUpdateFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AopCaseUpdate::class;

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
            'case_id'     => null,
            'contact_id'  => null,
            'internal'    => $this->faker->boolean(),
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
