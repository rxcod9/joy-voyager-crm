<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\UsersLastImport;
use TCG\Voyager\Facades\Voyager;

class UsersLastImportFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UsersLastImport::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $beanType = $this->faker->randomKey([
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
            'import_module' => $this->faker->word(),
            'bean_type'     => $beanType,
            'bean_id'       => (new $beanType)->factory(),
            'created_at'    => $this->faker->dateTime(),
            'updated_at'    => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
