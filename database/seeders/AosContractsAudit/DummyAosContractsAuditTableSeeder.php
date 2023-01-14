<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosContractsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosContractsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosContractsAudit')->factory()
            ->count($count)
            ->create();
    }
}
