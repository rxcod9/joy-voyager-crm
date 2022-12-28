<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AorField;

class AorFieldFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AorField::class;

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
            'aor_report_id'  => null,
            'field_order'    => $this->faker->numberBetween(1, 100),
            'module_path'    => null,
            'field'          => $this->faker->word(),
            'display'        => $this->faker->boolean(),
            'link'           => $this->faker->boolean(),
            'label'          => $this->faker->text(50),
            'field_function' => $this->faker->text(50),
            'sort_by'        => $this->faker->text(50),
            'format'         => $this->faker->text(50),
            'total'          => $this->faker->text(50),
            'sort_order'     => $this->faker->randomKey([
                'asc'  => 'Asc',
                'desc' => 'Desc',
            ]),
            'group_by'       => $this->faker->boolean(),
            'group_order'    => $this->faker->randomKey([
                'asc'  => 'Asc',
                'desc' => 'Desc',
            ]),
            'group_display'  => $this->faker->numberBetween(1, 10),

            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
