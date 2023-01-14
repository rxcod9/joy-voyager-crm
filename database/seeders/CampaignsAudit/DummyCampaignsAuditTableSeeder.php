<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyCampaignsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('CampaignsAudit')->factory()
            ->count($count)
            ->create();
    }
}
