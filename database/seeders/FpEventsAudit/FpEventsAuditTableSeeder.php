<?php

namespace Joy\VoyagerCrm\Database\Seeders\FpEventsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class FpEventsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('FpEventsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('FpEventsAudit')->factory()
            ->count($count)
            ->create();
    }
}
