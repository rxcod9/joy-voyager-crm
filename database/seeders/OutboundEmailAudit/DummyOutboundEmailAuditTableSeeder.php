<?php

namespace Joy\VoyagerCrm\Database\Seeders\OutboundEmailAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyOutboundEmailAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('OutboundEmailAudit')->factory()
            ->count($count)
            ->create();
    }
}
