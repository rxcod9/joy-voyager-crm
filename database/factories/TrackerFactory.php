<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Tracker;

class TrackerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Tracker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'monitor_id'   => $this->faker->uuid(),
            'user_id'      => null,
            'module_name'  => $this->faker->word(),
            'item_id'      => null,
            'item_summary' => $this->faker->text(50),
            'action'       => $this->faker->word(),
            'session_id'   => null,
            'visible'      => $this->faker->boolean(),
            'created_at'   => $this->faker->dateTime(),
            'updated_at'   => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
