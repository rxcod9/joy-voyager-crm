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
                'Administration' => 'Administration',
                'Product'        => 'Product',
                'User'           => 'User',
            ]),
            'priority'              => $this->faker->randomKey([
                'P1' => 'High',
                'P2' => 'Medium',
                'P3' => 'Low',
            ]),
            'resolution'            => $this->faker->paragraphs(10, true),
            'work_log'              => $this->faker->paragraphs(10, true),
            'account_id'            => null,
            'state'                 => $this->faker->randomKey([
                'Open'   => 'Open',
                'Closed' => 'Closed',
            ]),
            'contact_created_by_id' => null,
            'status'                => $this->faker->randomKey([
                'Open_New'           => 'New',
                'Open_Assigned'      => 'Assigned',
                'Closed_Closed'      => 'Closed',
                'Open_Pending Input' => 'Pending Input',
                'Closed_Rejected'    => 'Rejected',
                'Closed_Duplicate'   => 'Duplicate',
            ]),
            'created_at'            => $this->faker->dateTime(),
            'updated_at'            => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
