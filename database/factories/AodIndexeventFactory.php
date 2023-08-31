<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\AodIndexevent;
use TCG\Voyager\Facades\Voyager;

class AodIndexeventFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AodIndexevent::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $recordType = $this->faker->randomKey([
            // ''                                 => 'None',
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
            'name'          => $this->faker->name(),
            'description'   => $this->faker->text(500),
            'error'         => $this->faker->text(50),
            'success'       => $this->faker->boolean(),
            'record_module' => $recordType,
            'record_id'     => (new $recordType)->factory(),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
