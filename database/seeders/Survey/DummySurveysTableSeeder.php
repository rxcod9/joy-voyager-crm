<?php

namespace Joy\VoyagerCrm\Database\Seeders\Survey;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySurveysTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Survey')->factory()
            ->count($count)
            ->create();
    }
}
