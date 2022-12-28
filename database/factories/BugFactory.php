<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Bug;

class BugFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Bug::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'             => $this->faker->name(),
            'description'      => $this->faker->text(500),
            'bug_number'       => $this->faker->unique()->numberBetween(1, 1000),
            'type'             => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.types', [
                    'Type1' => 'Type1',
                    'Type2' => 'Type2',
                ])
            ]),
            'status'           => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.statuses', [
                    'Active'   => 'Active',
                    'Inactive' => 'Inactive',
                ]),
            ]),
            'priority'         => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.priorities', [
                    'Low'    => 'Low',
                    'Medium' => 'Medium',
                    'High'   => 'High',
                ]),
            ]),
            'resolution'       => $this->faker->randomKey([
                config('joy-voyager-crm.bugs.resolutions', [
                    'Yes' => 'Yes',
                    'No'  => 'No',
                ]),
            ]),
            'work_log'         => $this->faker->text(100),
            // 'found_in_release' => null,
            // 'fixed_in_release' => null,
            'source'           => $this->faker->text(10),
            'product_category' => $this->faker->text(10),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
