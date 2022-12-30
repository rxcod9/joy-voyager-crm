<?php

namespace Joy\VoyagerCrm\Database\Seeders\Tracker;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyTrackersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Tracker')->factory()
            ->count($count)
            ->create();
    }
}
