<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosProductsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosProductsAudit')->factory()
            ->count($count)
            ->create();
    }
}
