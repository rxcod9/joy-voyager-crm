<?php

namespace Joy\VoyagerCrm\Database\Seeders\SurveyresponsesAudit;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyresponsesAuditTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('SurveyresponsesAudit')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('SurveyresponsesAudit')->factory()
            ->count($count)
            ->create();
    }
}
