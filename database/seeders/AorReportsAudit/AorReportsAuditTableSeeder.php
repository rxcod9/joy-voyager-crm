<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorReportsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AorReportsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AorReportsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AorReportsAudit')->factory()
            ->count($count)
            ->create();
    }
}
