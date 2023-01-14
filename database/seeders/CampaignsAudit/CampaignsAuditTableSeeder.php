<?php

namespace Joy\VoyagerCrm\Database\Seeders\CampaignsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CampaignsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CampaignsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CampaignsAudit')->factory()
            ->count($count)
            ->create();
    }
}
