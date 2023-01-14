<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyquestionsAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyquestionsAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('SurveyquestionsAudit')->factory()
            ->count($count)
            ->create();
    }
}
