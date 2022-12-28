<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorScheduledReport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAorScheduledReportsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AorScheduledReport')->factory()
            ->count($count)
            ->create();
    }
}
