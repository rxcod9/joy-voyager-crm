<?php

namespace Joy\VoyagerCrm\Database\Seeders\SecuritygroupsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySecuritygroupsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SecuritygroupsAudit')->factory()
            ->count($count)
            ->create();
    }
}
