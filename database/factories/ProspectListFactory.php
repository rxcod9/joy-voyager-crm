<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\ProspectList;

class ProspectListFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProspectList::class;

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
            'list_type'   => $this->faker->randomKey([
                'default'        => 'Default',
                'seed'           => 'Seed',
                'exempt_domain'  => 'Suppression List - By Domain',
                'exempt_address' => 'Suppression List - By Email Address',
                'exempt'         => 'Suppression List - By Id',
                'test'           => 'Test',
            ]),
            'domain_name' => $this->faker->text(10),
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
