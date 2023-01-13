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
                ''                  => 'None',
                'Existing Business' => 'Existing Business',
                'New Business'      => 'New Business',
            ]),
            'campaign_id'      => null,
            'lead_source'      => $this->faker->randomKey([
                ''                  => 'None',
                'Cold Call'         => 'Cold Call',
                'Existing Customer' => 'Existing Customer',
                'Self Generated'    => 'Self Generated',
                'Employee'          => 'Employee',
                'Partner'           => 'Partner',
                'Public Relations'  => 'Public Relations',
                'Direct Mail'       => 'Direct Mail',
                'Conference'        => 'Conference',
                'Trade Show'        => 'Trade Show',
                'Web Site'          => 'Web Site',
                'Word of mouth'     => 'Word of mouth',
                'Email'             => 'Email',
                'Campaign'          => 'Campaign',
                'Other'             => 'Other',
            ]),
            'amount'           => $this->faker->randomFloat(2),
            'amount_usdollar'  => $this->faker->randomFloat(2),
            'currency_id'      => null,
            'date_closed'      => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'next_step'        => $this->faker->text(50),
            'sales_stage'      => $this->faker->randomKey([
                'Prospecting'          => 'Prospecting',
                'Qualification'        => 'Qualification',
                'Needs Analysis'       => 'Needs Analysis',
                'Value Proposition'    => 'Value Proposition',
                'Id. Decision Makers'  => 'Identifying Decision Makers',
                'Perception Analysis'  => 'Perception Analysis',
                'Proposal/Price Quote' => 'Proposal/Price Quote',
                'Negotiation/Review'   => 'Negotiation/Review',
                'Closed Won'           => 'Closed Won',
                'Closed Lost'          => 'Closed Lost',
            ]),
            'probability'      => $this->faker->randomKey([// keys must be the same as sales_stage_dom
                '10'  => 'Prospecting',
                '20'  => 'Qualification',
                '25'  => 'Needs Analysis',
                '30'  => 'Value Proposition',
                '40'  => 'Id. Decision Makers',
                '50'  => 'Perception Analysis',
                '65'  => 'Proposal/Price Quote',
                '80'  => 'Negotiation/Review',
                '100' => 'Closed Won',
                '0'   => 'Closed Lost',
            ]),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
