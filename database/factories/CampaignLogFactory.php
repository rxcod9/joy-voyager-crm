<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\CampaignLog;
use TCG\Voyager\Facades\Voyager;

class CampaignLogFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CampaignLog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $targetType = $this->faker->randomKey([
            Voyager::modelClass('Lead')     => 'Leads',
            Voyager::modelClass('Prospect') => 'Prospects',
            Voyager::modelClass('Contact')  => 'Contacts',
            Voyager::modelClass('Account')  => 'Accounts',
        ]);

        $relatedType = $this->faker->randomKey([
            Voyager::modelClass('Contact')     => 'Contacts',
            Voyager::modelClass('Email')       => 'Emails',
            Voyager::modelClass('Lead')        => 'Leads',
            Voyager::modelClass('Opportunity') => 'Opportunities',
        ]);

        return [
            'id'                 => null,
            'campaign_id'        => null,
            'target_tracker_key' => null,
            'target_type'        => $targetType,
            'target_id'          => $targetType::factory(),
            'activity_type'      => $this->faker->randomKey([
                ''              => 'None',
                'targeted'      => 'Message Sent/Attempted',
                'send error'    => 'Bounced Messages,Other',
                'invalid email' => 'Bounced Messages,Invalid Email',
                'link'          => 'Click-thru Link',
                'viewed'        => 'Viewed Message',
                'removed'       => 'Opted Out',
                'lead'          => 'Leads Created',
                'contact'       => 'Contacts Created',
                'blocked'       => 'Suppressed by address or domain',
            ]),
            'activity_date'      => $this->faker->dateTimeBetween('-1month', 'now'),
            'related_type'       => $relatedType,
            'related_id'         => $relatedType::factory(),
            'archived'           => $this->faker->boolean(),
            'hits'               => $this->faker->numberBetween(1, 100),
            'list_id'            => null,
            'more_information'   => $this->faker->text(50),
            'marketing_id'       => null,
            'created_at'         => $this->faker->dateTime(),
            'updated_at'         => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
