<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AowProcessed;

class AowProcessedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AowProcessed::class;

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
            'aow_workflow_id' => null,
            'parent_type'     => null,
            'parent_id'       => null,
            'status'          => $this->faker->randomKey([
                'Pending'  => 'Pending',
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
            ]),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
