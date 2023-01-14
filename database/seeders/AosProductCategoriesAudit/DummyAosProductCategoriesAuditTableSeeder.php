<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosProductCategoriesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAosProductCategoriesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AosProductCategoriesAudit')->factory()
            ->count($count)
            ->create();
    }
}
