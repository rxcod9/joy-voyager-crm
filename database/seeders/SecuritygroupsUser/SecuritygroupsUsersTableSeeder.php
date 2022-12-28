<?php

namespace Joy\VoyagerCrm\Database\Seeders\SecuritygroupsUser;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SecuritygroupsUsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SecuritygroupsUser')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SecuritygroupsUser')->factory()
            ->count($count)
            ->create();
    }
}
