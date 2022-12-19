<?php

namespace Joy\VoyagerCrm\Database\Seeders\Securitygroup;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SecuritygroupsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Securitygroup')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Securitygroup')->factory()
            ->count($count)
            ->create();
    }
}
