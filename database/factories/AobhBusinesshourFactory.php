<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AobhBusinesshour;

class AobhBusinesshourFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AobhBusinesshour::class;

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
            'opening_hours' => $this->faker->time(),
            'closing_hours' => $this->faker->time(),
            'open_status'   => $this->faker->boolean(),
            'day'           => $this->faker->randomKey([
                'sunday'    => 'Sunday',
                'monday'    => 'Monday',
                'tuesday'   => 'Tuesday',
                'wednesday' => 'Wednesday',
                'thursday'  => 'Thursday',
                'friday'    => 'Friday',
                'saturday'  => 'Saturday',
            ]),
            // 'status'        => $this->faker->randomElement([
            //     'Active',
            //     'Inactive',
            // ]),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
