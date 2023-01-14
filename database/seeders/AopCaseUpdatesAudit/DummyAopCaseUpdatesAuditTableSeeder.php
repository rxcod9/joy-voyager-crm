<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseUpdatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAopCaseUpdatesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AopCaseUpdatesAudit')->factory()
            ->count($count)
            ->create();
    }
}
