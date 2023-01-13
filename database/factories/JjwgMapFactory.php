<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\JjwgMap;
use TCG\Voyager\Facades\Voyager;

class JjwgMapFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JjwgMap::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $parentType = $this->faker->randomKey([
            ''                                 => 'None',
            Voyager::modelClass('Account')     => 'Account',
            Voyager::modelClass('Opportunity') => 'Opportunity',
            Voyager::modelClass('CrmCase')     => 'Case',
            Voyager::modelClass('Lead')        => 'Lead',
            Voyager::modelClass('Contact')     => 'Contact', // cn (11/22/2005) added to support Emails

            Voyager::modelClass('Bug')         => 'Bug',
            Voyager::modelClass('Project')     => 'Project',

            Voyager::modelClass('Prospect')    => 'Target',
            Voyager::modelClass('ProjectTask') => 'Project Task',

            Voyager::modelClass('Task')        => 'Task',

            Voyager::modelClass('AosContract') => 'Contract',
            Voyager::modelClass('AosInvoice')  => 'Invoice',
            Voyager::modelClass('AosQuote')    => 'Quote',
            Voyager::modelClass('AosProduct')  => 'Product',
        ]);

        return [
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(500),
            'distance'    => $this->faker->randomFloat(4, 5, 20),
            'unit_type'   => $this->faker->randomElement([
                'Mi',
                'Km',
            ]),
            'module_type' => null,
            'parent_type' => $parentType,
            'parent_id'   => optional($parentType)->factory(),
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
