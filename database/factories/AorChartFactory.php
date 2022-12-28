<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AorChart;

class AorChartFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AorChart::class;

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
            'aor_report_id' => null,
            'type'          => $this->faker->randomElement([
                'Type1',
                'Type2',
            ]),
            'x_field'       => $this->faker->numberBetween(1, 100),
            'y_field'       => $this->faker->numberBetween(1, 100),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
