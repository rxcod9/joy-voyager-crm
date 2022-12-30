<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestionresponse;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyquestionresponsesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Surveyquestionresponse')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Surveyquestionresponse')->factory()
            ->count($count)
            ->create();
    }
}
