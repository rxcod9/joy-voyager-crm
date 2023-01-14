<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Sugarfeed;
use TCG\Voyager\Facades\Voyager;

class SugarfeedFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Sugarfeed::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $relatedType = $this->faker->randomKey([
            Voyager::modelClass('Contact')     => 'Contacts',
            Voyager::modelClass('Email')       => 'Emails',
            Voyager::modelClass('Lead')        => 'Leads',
            Voyager::modelClass('Opportunity') => 'Opportunities',
        ]);

        return [
            'name'           => $this->faker->name(),
            'description'    => $this->faker->text(500),
            'related_module' => $relatedType,
            'related_id'     => $relatedType::factory(),
            'link_url'       => $this->faker->word(),
            'link_type'      => $this->faker->randomKey([
                'sugar'  => 'SuiteCRM Email Client',
                'mailto' => 'External Email Client',
            ]),
            'created_at'     => $this->faker->dateTime(),
            'updated_at'     => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
