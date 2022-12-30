<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignLog;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCampaignLogsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CampaignLog')->factory()
            ->count($count)
            ->create();
    }
}
