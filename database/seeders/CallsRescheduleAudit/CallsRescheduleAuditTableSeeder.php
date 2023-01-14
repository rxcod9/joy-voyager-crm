<?php

namespace Joy\VoyagerCrm\Database\Seeders\CallsRescheduleAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class CallsRescheduleAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('CallsRescheduleAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('CallsRescheduleAudit')->factory()
            ->count($count)
            ->create();
    }
}
