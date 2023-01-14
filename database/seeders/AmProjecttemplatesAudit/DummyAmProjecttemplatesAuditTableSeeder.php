<?php

namespace Joy\VoyagerCrm\Database\Seeders\AmProjecttemplatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAmProjecttemplatesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AmProjecttemplatesAudit')->factory()
            ->count($count)
            ->create();
    }
}
