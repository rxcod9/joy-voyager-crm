<?php

namespace Joy\VoyagerCrm\Database\Seeders\Survey;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class SurveysTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Voyager::model('Survey')->query()->count() > 0) {
            return false;
        }

        $count = 20;
        Voyager::model('Survey')->factory()
            ->count($count)
            ->create();
    }
}
