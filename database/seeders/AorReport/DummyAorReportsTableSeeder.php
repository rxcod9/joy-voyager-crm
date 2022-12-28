<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorReport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAorReportsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AorReport')->factory()
            ->count($count)
            ->create();
    }
}
