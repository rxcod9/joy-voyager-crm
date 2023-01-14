<?php

namespace Joy\VoyagerCrm\Database\Seeders\AopCaseEventsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AopCaseEventsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AopCaseEventsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AopCaseEventsAudit')->factory()
            ->count($count)
            ->create();
    }
}
