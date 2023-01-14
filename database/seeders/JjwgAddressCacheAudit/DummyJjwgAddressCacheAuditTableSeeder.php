<?php

namespace Joy\VoyagerCrm\Database\Seeders\JjwgAddressCacheAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyJjwgAddressCacheAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('JjwgAddressCacheAudit')->factory()
            ->count($count)
            ->create();
    }
}
