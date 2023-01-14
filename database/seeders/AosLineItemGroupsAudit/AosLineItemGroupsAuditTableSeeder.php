<?php

namespace Joy\VoyagerCrm\Database\Seeders\AosLineItemGroupsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AosLineItemGroupsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AosLineItemGroupsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AosLineItemGroupsAudit')->factory()
            ->count($count)
            ->create();
    }
}
