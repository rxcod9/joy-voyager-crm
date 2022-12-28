<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestionoption;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyquestionoptionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Surveyquestionoption')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Surveyquestionoption')->factory()
            ->count($count)
            ->create();
    }
}
