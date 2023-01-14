<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosInvoicesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosInvoicesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosInvoicesAudit')->factory()
            ->count($count)
            ->create();
    }
}
