<?php

namespace Joy\VoyagerCrm\Database\Seeders\SecuritygroupsRecord;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SecuritygroupsRecordsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SecuritygroupsRecord')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SecuritygroupsRecord')->factory()
            ->count($count)
            ->create();
    }
}
