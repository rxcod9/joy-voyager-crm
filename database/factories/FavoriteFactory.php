<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Favorite;
use TCG\Voyager\Facades\Voyager;

class FavoriteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Favorite::class;

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
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(500),
            'parent_type' => $parentType,
            'parent_id'   => optional($parentType)->factory(),
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
