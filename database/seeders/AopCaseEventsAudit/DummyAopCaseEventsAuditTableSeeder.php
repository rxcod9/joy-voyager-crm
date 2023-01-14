<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseEventsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAopCaseEventsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AopCaseEventsAudit')->factory()
            ->count($count)
            ->create();
    }
}
