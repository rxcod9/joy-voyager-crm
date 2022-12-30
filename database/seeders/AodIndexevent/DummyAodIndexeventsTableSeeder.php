<?php

namespace Joy\VoyagerCrm\Database\Seeders\AodIndexevent;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyAodIndexeventsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('AodIndexevent')->factory()
            ->count($count)
            ->create();
    }
}
