<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestion;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyquestionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Surveyquestion')->factory()
            ->count($count)
            ->create();
    }
}
