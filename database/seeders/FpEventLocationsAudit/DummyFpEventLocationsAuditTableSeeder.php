<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEventLocationsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyFpEventLocationsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('FpEventLocationsAudit')->factory()
            ->count($count)
            ->create();
    }
}
