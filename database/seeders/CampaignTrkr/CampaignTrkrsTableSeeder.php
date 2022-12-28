<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignTrkr;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CampaignTrkrsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CampaignTrkr')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CampaignTrkr')->factory()
            ->count($count)
            ->create();
    }
}
