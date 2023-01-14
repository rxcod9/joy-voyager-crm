<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyquestionresponsesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyquestionresponsesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SurveyquestionresponsesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SurveyquestionresponsesAudit')->factory()
            ->count($count)
            ->create();
    }
}
