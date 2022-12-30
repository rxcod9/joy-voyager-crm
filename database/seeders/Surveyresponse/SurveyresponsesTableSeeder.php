<?php

namespace Joy\VoyagerCrm\Database\Seeders\Surveyresponse;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveyresponsesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Surveyresponse')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Surveyresponse')->factory()
            ->count($count)
            ->create();
    }
}
