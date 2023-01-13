<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\Campaign;

class CampaignFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Campaign::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'             => $this->faker->name(),
            'tracker_key'      => $this->faker->randomNumber(6),
            'tracker_count'    => $this->faker->numberBetween(1, 100),
            'refer_url'        => $this->faker->url(),
            'tracker_text'     => $this->faker->text(50),
            'start_date'       => $this->faker->dateTimeBetween('-1month', 'now')->format('Y-m-d'),
            'end_date'         => $this->faker->dateTimeBetween('-1month', '+1month')->format('Y-m-d'),
            'impressions'      => $this->faker->numberBetween(1, 100),
            // 'currency_id' => null,
            'budget'           => $this->faker->randomFloat(2),
            'actual_cost'      => $this->faker->randomFloat(2),
            'expected_revenue' => $this->faker->randomFloat(2),
            'campaign_type'    => $this->faker->randomKey([
                ''           => 'None',
                'Telesales'  => 'Telesales',
                'Mail'       => 'Mail',
                'Email'      => 'Email',
                'Print'      => 'Print',
                'Web'        => 'Web',
                'Radio'      => 'Radio',
                'Television' => 'Television',
                'NewsLetter' => 'Newsletter',
                'Survey'     => 'Survey',
            ]),
            'objective'        => $this->faker->paragraphs(10, true),
            'content'          => $this->faker->paragraphs(10, true),
            'frequency'        => $this->faker->randomKey([
                ''          => 'None',
                'Weekly'    => 'Weekly',
                'Monthly'   => 'Monthly',
                'Quarterly' => 'Quarterly',
                'Annually'  => 'Annually',
            ]),
            // 'survey_id'        => null,
            'status'           => $this->faker->randomKey([
                ''         => 'None',
                'Planning' => 'Planning',
                'Active'   => 'Active',
                'Inactive' => 'Inactive',
                'Complete' => 'Complete',
                //'In Queue' => 'In Queue',
                //'Sending' => 'Sending',
            ]),
            'created_at'       => $this->faker->dateTime(),
            'updated_at'       => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
