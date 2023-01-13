<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\ProspectListsProspect;
use TCG\Voyager\Facades\Voyager;

class ProspectListsProspectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProspectListsProspect::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $relatedType = $this->faker->randomKey([
            Voyager::modelClass('Lead')     => 'Leads',
            Voyager::modelClass('User')     => 'User',
            Voyager::modelClass('Prospect') => 'Prospects',
            Voyager::modelClass('Contact')  => 'Contacts',
            Voyager::modelClass('Account')  => 'Accounts',
        ]);

        return [
            'prospect_list_id' => null,
            'related_type'     => $relatedType,
            'related_id'       => $relatedType::factory(),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
