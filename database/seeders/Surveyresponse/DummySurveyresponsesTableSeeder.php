<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyresponse;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveyresponsesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Surveyresponse')->factory()
            ->count($count)
            ->create();
    }
}
