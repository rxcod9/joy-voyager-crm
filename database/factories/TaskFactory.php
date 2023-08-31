<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Task;
use TCG\Voyager\Facades\Voyager;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $parentType = $this->faker->randomKey([
            // ''                                 => 'None',
            Voyager::modelClass('Account')     => 'Account',
            Voyager::modelClass('Contact')     => 'Contact',
            Voyager::modelClass('Task')        => 'Task',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            Voyager::modelClass('Bug')         => 'Bug', // cn (11/22/2005) added to support Emails

            Voyager::modelClass('CrmCase')     => 'Case',
            Voyager::modelClass('Lead')        => 'Lead',

            Voyager::modelClass('Project')     => 'Project',
            Voyager::modelClass('ProjectTask') => 'Task Task',

            Voyager::modelClass('Prospect')    => 'Target',

            Voyager::modelClass('AosContract') => 'Contract',
            Voyager::modelClass('AosInvoice')  => 'Invoice',
            Voyager::modelClass('AosQuote')    => 'Quote',
            Voyager::modelClass('AosProduct')  => 'Product',
        ]);

        return [
            'name'            => $this->faker->name(),
            'description'     => $this->faker->text(500),
            'date_due_flag'   => $this->faker->boolean(),
            'date_due'        => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'date_start_flag' => $this->faker->boolean(),
            'date_start'      => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'parent_type'     => $parentType,
            'parent_id'       => (new $parentType)->factory(),
            'contact_id'      => null,
            'priority'        => $this->faker->randomKey([
                'Low'    => 'Low',
                'Medium' => 'Medium',
                'High'   => 'High',
            ]),
            'status'          => $this->faker->randomKey([
                'Not Started'   => 'Not Started',
                'In Progress'   => 'In Progress',
                'Completed'     => 'Completed',
                'Pending Input' => 'Pending Input',
                'Deferred'      => 'Deferred',
            ]),
            'created_at'      => $this->faker->dateTime(),
            'updated_at'      => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
