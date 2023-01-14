<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseUpdatesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AopCaseUpdatesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AopCaseUpdatesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AopCaseUpdatesAudit')->factory()
            ->count($count)
            ->create();
    }
}
