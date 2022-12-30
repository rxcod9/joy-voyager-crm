<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestionresponse;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyquestionresponsesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Surveyquestionresponse')->factory()
            ->count($count)
            ->create();
    }
}
