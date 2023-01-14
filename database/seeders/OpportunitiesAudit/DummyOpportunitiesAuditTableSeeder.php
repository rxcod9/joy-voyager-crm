<?php

namespace Joy\VoyagerCrm\Database\Seeders\OpportunitiesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyOpportunitiesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('OpportunitiesAudit')->factory()
            ->count($count)
            ->create();
    }
}
