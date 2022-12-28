<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyquestion;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyquestionsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Surveyquestion')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Surveyquestion')->factory()
            ->count($count)
            ->create();
    }
}
