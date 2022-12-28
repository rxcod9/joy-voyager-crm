<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignTrkr;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCampaignTrkrsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CampaignTrkr')->factory()
            ->count($count)
            ->create();
    }
}
