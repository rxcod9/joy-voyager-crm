<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorScheduledReport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AorScheduledReportsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AorScheduledReport')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AorScheduledReport')->factory()
            ->count($count)
            ->create();
    }
}
