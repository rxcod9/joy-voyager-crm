<?php

namespace Joy\VoyagerCrm\Database\Seeders\Meeting;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyMeetingsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('Meeting')->factory()
            ->count($count)
            ->create();
    }
}
