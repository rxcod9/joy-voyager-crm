<?php

namespace Joy\VoyagerCrm\Database\Seeders\SecuritygroupsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SecuritygroupsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SecuritygroupsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SecuritygroupsAudit')->factory()
            ->count($count)
            ->create();
    }
}
