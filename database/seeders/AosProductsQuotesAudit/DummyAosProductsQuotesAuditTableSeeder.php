<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductsQuotesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosProductsQuotesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosProductsQuotesAudit')->factory()
            ->count($count)
            ->create();
    }
}
