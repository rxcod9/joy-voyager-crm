<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Alert;

class AlertFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Alert::class;

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
            'is_read'       => $this->faker->boolean(),
            'target_module' => $this->faker->randomElement([
                'accounts',
                'contacts',
            ]),
            'type'          => $this->faker->randomElement([
                'Type1',
                'Type2',
            ]),
            'url_redirect'  => $this->faker->url(),
            // 'reminder_id' => null,
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
