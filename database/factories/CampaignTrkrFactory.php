<?php

namespace Joy\VoyagerCrm\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Joy\VoyagerCrm\Models\CampaignTrkr;

class CampaignTrkrFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CampaignTrkr::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tracker_name' => $this->faker->word(),
            'tracker_url'  => $this->faker->url(),
            'tracker_key'  => $this->faker->randomNumber(),
            'campaign_id'  => null,
            'is_optout'    => $this->faker->boolean(),
            'created_at'   => $this->faker->dateTime(),
            'updated_at'   => $this->faker->dateTime(),
            // 'deleted_at' => $this->faker->dateTime(),
        ];
    }
}
