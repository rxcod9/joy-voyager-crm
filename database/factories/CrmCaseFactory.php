<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\CrmCase;

class CrmCaseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CrmCase::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                  => $this->faker->name(),
            'description'           => $this->faker->text(500),
            // 'case_number'           => $this->faker->numberBetween(1, 100), // Auto incrementing
            'type'                  => $this->faker->randomKey([
                'Type1' => 'Type1',
                'Type2' => 'Type2',
            ]),
            'priority'              => $this->faker->randomKey([
                'Priority1' => 'Priority1',
                'Priority2' => 'Priority2',
            ]),
            'resolution'            => $this->faker->randomKey([
                'Resolution1' => 'Resolution1',
                'Resolution2' => 'Resolution2',
            ]),
            'work_log'              => $this->faker->paragraphs(10, true),
            'account_id'            => null,
            'state'                 => $this->faker->randomKey([
                'Open'   => 'Open',
                'Closed' => 'Closed',
            ]),
            'contact_created_by_id' => null,
            'status'                => $this->faker->randomKey([
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
            ]),
            'created_at'            => $this->faker->dateTime(),
            'updated_at'            => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
