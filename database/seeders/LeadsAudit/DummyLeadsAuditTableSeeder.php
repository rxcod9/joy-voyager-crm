<?php

namespace Joy\VoyagerCrm\Database\Seeders\LeadsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyLeadsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('LeadsAudit')->factory()
            ->count($count)
            ->create();
    }
}
