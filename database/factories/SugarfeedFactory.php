<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Sugarfeed;

class SugarfeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sugarfeed::class;

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
            'related_module' => null,
            'related_id'     => null,
            'link_url'       => $this->faker->word(),
            'link_type'      => $this->faker->randomKey([
                'sugar'  => 'SuiteCRM Email Client',
                'mailto' => 'External Email Client',
            ]),
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
