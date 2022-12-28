<?php

namespace Joy\VoyagerCrm\Database\Seeders\AobhBusinesshour;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAobhBusinesshoursTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AobhBusinesshour')->factory()
            ->count($count)
            ->create();
    }
}
