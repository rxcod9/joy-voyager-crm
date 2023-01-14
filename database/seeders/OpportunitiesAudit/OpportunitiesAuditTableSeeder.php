<?php

namespace Joy\VoyagerCrm\Database\Seeders\OpportunitiesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class OpportunitiesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('OpportunitiesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('OpportunitiesAudit')->factory()
            ->count($count)
            ->create();
    }
}
