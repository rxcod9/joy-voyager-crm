<?php

namespace Joy\VoyagerCrm\Database\Seeders\EmailMarketing;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyEmailMarketingTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('EmailMarketing')->factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'inbound_email_id'  => optional(Voyager::model('InboundEmail')->inRandomOrder()->take(1)->first())->id,
                    'template_id'       => optional(Voyager::model('EmailTemplate')->inRandomOrder()->take(1)->first())->id,
                    'campaign_id'       => optional(Voyager::model('Campaign')->inRandomOrder()->take(1)->first())->id,
                    'outbound_email_id' => optional(Voyager::model('OutboundEmail')->inRandomOrder()->take(1)->first())->id,
                ];
            })
            ->create();
    }
}
