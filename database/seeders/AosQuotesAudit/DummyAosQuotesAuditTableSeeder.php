<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosQuotesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosQuotesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosQuotesAudit')->factory()
            ->count($count)
            ->create();
    }
}
