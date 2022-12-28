<?php

namespace Joy\VoyagerCrm\Database\Seeders\AorReport;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class AorReportsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('AorReport')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('AorReport')->factory()
            ->count($count)
            ->create();
    }
}
