<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveysAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveysAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SurveysAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SurveysAudit')->factory()
            ->count($count)
            ->create();
    }
}
