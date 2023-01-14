<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyquestionoptionsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyquestionoptionsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SurveyquestionoptionsAudit')->factory()
            ->count($count)
            ->create();
    }
}
