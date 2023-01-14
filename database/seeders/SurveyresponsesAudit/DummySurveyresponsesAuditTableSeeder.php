<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyresponsesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyresponsesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SurveyresponsesAudit')->factory()
            ->count($count)
            ->create();
    }
}
