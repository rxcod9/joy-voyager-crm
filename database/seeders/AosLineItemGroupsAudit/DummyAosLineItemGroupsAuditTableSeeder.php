<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosLineItemGroupsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosLineItemGroupsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosLineItemGroupsAudit')->factory()
            ->count($count)
            ->create();
    }
}
