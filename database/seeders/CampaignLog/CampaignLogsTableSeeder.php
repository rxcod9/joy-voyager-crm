<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignLog;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CampaignLogsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CampaignLog')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CampaignLog')->factory()
            ->count($count)
            ->create();
    }
}
