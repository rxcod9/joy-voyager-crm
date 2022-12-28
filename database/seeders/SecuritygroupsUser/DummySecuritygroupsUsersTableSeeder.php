<?php

namespace Joy\VoyagerCrm\Database\Seeders\SecuritygroupsUser;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySecuritygroupsUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SecuritygroupsUser')->factory()
            ->count($count)
            ->create();
    }
}
