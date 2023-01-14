<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEventsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyFpEventsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('FpEventsAudit')->factory()
            ->count($count)
            ->create();
    }
}
