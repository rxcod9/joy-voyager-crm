<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorReportsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAorReportsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AorReportsAudit')->factory()
            ->count($count)
            ->create();
    }
}
