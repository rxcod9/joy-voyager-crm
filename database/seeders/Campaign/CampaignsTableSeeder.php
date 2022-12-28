<?php

namespace Joy\VoyagerCrm\Database\Seeders\Campaign;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CampaignsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Campaign')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Campaign')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'currency_id' => optional(Voyager::model('Currency')->inRandomOrder()->take(1)->first())->id,
                    'survey_id'   => optional(Voyager::model('Survey')->inRandomOrder()->take(1)->first())->id
                ];
            })
            ->create();
    }
}
