<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyquestionresponsesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyquestionresponsesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SurveyquestionresponsesAudit')->factory()
            ->count($count)
            ->create();
    }
}
