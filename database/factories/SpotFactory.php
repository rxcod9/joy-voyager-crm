<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Spot;

class SpotFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Spot::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'        => $this->faker->name(),
            'description' => $this->faker->text(500),
            'config'      => null,
            'type'        => $this->faker->randomKey([
                'getSalesSpotsData'             => 'Sales',
                'getAccountsSpotsData'          => 'Accounts',
                'getLeadsSpotsData'             => 'Leads',
                'getServiceSpotsData'           => 'Service',
                'getMarketingSpotsData'         => 'Marketing',
                'getMarketingActivitySpotsData' => 'Marketing Activity',
                'getActivitiesSpotsData'        => 'Activities',
                'getQuotesSpotsData'            => 'Quotes'
            ]),
            'created_at'  => $this->faker->dateTime(),
            'updated_at'  => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
