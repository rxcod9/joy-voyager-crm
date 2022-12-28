<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestionoption;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyquestionoptionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Surveyquestionoption')->factory()
            ->count($count)
            ->create();
    }
}
