<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyquestionsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyquestionsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SurveyquestionsAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SurveyquestionsAudit')->factory()
            ->count($count)
            ->create();
    }
}
