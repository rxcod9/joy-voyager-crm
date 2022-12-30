<?php

namespace Joy\VoyagerCrm\Database\Seeders\MeetingsLead;

use Illuminate\Database\Seeder;
use TCG\Voyager\Facades\Voyager;

class DummyMeetingsLeadsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        $count = 20;
        Voyager::model('MeetingsLead')->factory()
            ->count($count)
            ->create();
    }
}
