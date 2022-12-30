<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\CampaignLog;

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
        return [
            'id'                 => null,
            'campaign_id'        => null,
            'target_tracker_key' => null,
            'target_id'          => null,
            'target_type'        => null,
            'activity_type'      => $this->faker->randomKey([
                'Type1' => 'Type1',
                'Type2' => 'Type2',
            ]),
            'activity_date'      => $this->faker->dateTimeBetween('-1month', 'now'),
            'related_id'         => null,
            'related_type'       => null,
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
