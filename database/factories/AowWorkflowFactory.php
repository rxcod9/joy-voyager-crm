<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AowWorkflow;

class AowWorkflowFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AowWorkflow::class;

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
            'flow_module'   => $this->faker->randomElement([
                // @FIXME
                'accounts',
                'contacts',
                'opportunites',
                'meetings',
            ]),
            'flow_run_on'   => $this->faker->randomKey([
                'All_Records'      => 'All Records',
                'New_Records'      => 'New Records',
                'Modified_Records' => 'Modified Records',
            ]),
            'status'        => $this->faker->randomElement([
                'Active',
                'Inactive',
            ]),
            'run_when'      => $this->faker->randomKey([
                'Always'       => 'Always',
                'On_Save'      => 'Only On Save',
                'In_Scheduler' => 'Only In The Scheduler',
            ]),
            'multiple_runs' => $this->faker->boolean(),
            'run_on_import' => $this->faker->boolean(),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
