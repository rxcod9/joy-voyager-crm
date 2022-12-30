<?php

namespace Joy\VoyagerCrm\Database\Seeders\SecuritygroupsRecord;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySecuritygroupsRecordsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SecuritygroupsRecord')->factory()
            ->count($count)
            ->create();
    }
}
