<?php

namespace Joy\VoyagerCrm\Database\Seeders\Sugarfeed;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummySugarfeedsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Sugarfeed')->factory()
            ->count($count)
            ->create();
    }
}
