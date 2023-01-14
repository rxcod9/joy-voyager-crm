<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyquestionoptionsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyquestionoptionsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SurveyquestionoptionsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SurveyquestionoptionsAudit')->factory()
            ->count($count)
            ->create();
    }
}
