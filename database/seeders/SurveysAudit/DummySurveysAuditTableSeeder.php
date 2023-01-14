<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveysAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveysAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SurveysAudit')->factory()
            ->count($count)
            ->create();
    }
}
