<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Opportunity;

class OpportunityFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Opportunity::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'             => $this->faker->name(),
            'description'      => $this->faker->text(500),
            'opportunity_type' => $this->faker->randomKey([
                'Type1' => 'Type1',
                'Type2' => 'Type2',
            ]),
            'campaign_id'      => null,
            'lead_source'      => $this->faker->word(),
            'amount'           => $this->faker->randomFloat(2),
            'amount_usdollar'  => $this->faker->randomFloat(2),
            'currency_id'      => null,
            'date_closed'      => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'next_step'        => $this->faker->text(50),
            'sales_stage'      => $this->faker->randomKey([
                'Stage1' => 'Stage1',
                'Stage2' => 'Stage2',
            ]),
            'probability'      => $this->faker->randomFloat(2),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
