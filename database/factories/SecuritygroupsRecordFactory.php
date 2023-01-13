<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\SecuritygroupsRecord;
use TCG\Voyager\Facades\Voyager;

class SecuritygroupsRecordFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SecuritygroupsRecord::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $recordType = $this->faker->randomKey([
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
            'securitygroup_id' => null,
            'module'           => $recordType,
            'record_id'        => optional($recordType)->factory(),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
